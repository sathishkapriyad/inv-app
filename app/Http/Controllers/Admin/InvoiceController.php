<?php

namespace App\Http\Controllers\Admin;

use Mpdf\Mpdf;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\ToiletInvoice;
use App\Models\WasteWaterInvoice;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\ToiletFulljobInvoice;
use Illuminate\Support\Facades\View;
use App\Models\WasteWaterFulljobInvoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
                {
                        return datatables()->of(Invoice::all())
                                ->addColumn('quotation_no', function($data){
                                    return $data->quotation_no;
                                })
                                ->addColumn('name', function($data){
                                    return $data->visiting->first_name;
                                })
                                ->addColumn('reference_no', function($data){
                                    return $data->visiting->reference_no;
                                })
                                ->addColumn('address', function($data){
                                    return $data->visiting->user_address == null ? '-' : $data->visiting->user_address;
                                })
                                ->addColumn('actions', function($data){
                                    // return '<a href="'.route('admin.invoice.show',$data->id).'" class="btn btn-primary btn-sm">View Invoice</a> &nbsp;&nbsp;<a href="'.asset($data->pdf_path).'" class="btn btn-info btn-sm">View PDF</a>';
                                    return '<a href="'.route('admin.viewPDF',$data->id).'" target="_blank" class="btn btn-info btn-sm">View PDF</a> &nbsp;&nbsp;<a href="'.route('admin.invoice.show',$data->id).'" class="btn btn-danger btn-sm">Delete</a>';
                                })
                                ->rawColumns(['quotation_no','reference_no','name','address','actions'])
                                ->make(true);
                }
        return view('admin.invoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoice.create');
    }

    public function viewPDF(Invoice $invoice)
    {
        if ($invoice->invoice_type == 'toiletInvoice') {
            $view = $this->ToiletSingleJobHTML($invoice);
            $html = $view->render();
            $mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => 'A4-P', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
            $mpdf->SetFont('iskpota');// this is new line
            $mpdf->WriteHTML($html);
            $mpdf->Output();
            }elseif ($invoice->invoice_type == 'toiletFulljobInvoice') {
            $view = $this->ToiletFullJobHTML($invoice);
            $html = $view->render();
            $mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => 'A4-P', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
            $mpdf->SetFont('iskpota');// this is new line
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }elseif ($invoice->invoice_type == 'tasteWaterInvoice') {
            $view = $this->WasteWaterSingleJobHTML($invoice);
            $html = $view->render();
            $mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => 'A4-P', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
            $mpdf->SetFont('iskpota');// this is new line
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }elseif ($invoice->invoice_type == 'wasteWaterFulljobInvoice') {
            $view = $this->WasteWaterFullJobHTML($invoice);
            $html = $view->render();
            $mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => 'A4-P', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
            $mpdf->SetFont('iskpota');// this is new line
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }
    }

    public function ToiletSingleJobHTML(Invoice $invoice)
    {
        $invoice=Invoice::where('id',$invoice->id)->with(['toiletSingleJobInvoices'=>function($query){
                        $query->orderBy('product_id', 'asc');
                    }])->first();
        return View::make('pdf_templates.toilet_single_job',['invoice'=>$invoice]);
    }

    public function ToiletFullJobHTML(Invoice $invoice)
    {
        $invoice=Invoice::where('id',$invoice->id)->with(['toiletFullJobInvoices'=>function($query){
                        $query->orderBy('product_id', 'asc');
                    }])->first();
        return View::make('pdf_templates.toilet_full_job',['invoice'=>$invoice]);
    }

    public function WasteWaterSingleJobHTML(Invoice $invoice)
    {
        $invoice=Invoice::where('id',$invoice->id)->with(['wasteWaterSingleJobInvoices'=>function($query){
                        $query->orderBy('product_id', 'asc');
                    }])->first();
        return View::make('pdf_templates.waste_water_single_job',['invoice'=>$invoice]);
    }

    public function WasteWaterFullJobHTML(Invoice $invoice)
    {
        $invoice=Invoice::where('id',$invoice->id)->with(['wasteWaterFullJobInvoices'=>function($query){
                        $query->orderBy('product_id', 'asc');
                    }])->first();
        return View::make('pdf_templates.waste_water_full_job',['invoice'=>$invoice]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $invoiceType=null;
        if ($request->user_id == null || $request->user_id == "") {
            return redirect()->back()->with('danger','Please select user.');
        }
        if ($request->toilet[0]['quantity'] != null) {
            $invoiceType='toiletInvoice';
        }elseif ($request->toilet_fulljob[0]['quantity'] != null) {
            $invoiceType='toiletFulljobInvoice';
        }elseif ($request->waste_water[0]['quantity'] != null) {
            $invoiceType='tasteWaterInvoice';
        }elseif ($request->waste_water_fulljob[0]['quantity'] != null) {
            $invoiceType='wasteWaterFulljobInvoice';
        }else {
            return redirect()->back()->with('danger','Please fill the invoice details.');
        }
        $invoice=Invoice::create([
            'user_id'=>auth()->user()->id,
            'visiting_id'=>$request->user_id,
            'quotation_no'=>$request->quotation_no,
            'invoice_type'=>$invoiceType,
        ]);

        if ($invoiceType == 'toiletInvoice') {
            foreach ($request->toilet as $key => $value) {
                ToiletInvoice::create([
                    'invoice_id'=>$invoice->id,
                    'product_id'=>$key,
                    'extra_item'=>$value['extra_item']==null ? 0 : $value['extra_item'],
                    'length'=>$value['length']==null ? 0 : $value['length'],
                    'width'=>$value['width']==null ? 0 :$value['width'],
                    'height'=>$value['height']==null ? 0 : $value['height'],
                    'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                    'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                    'total'=>$value['total']==null ? 0 : $value['total'],
                ]);
            }
        } elseif ($invoiceType == 'toiletFulljobInvoice') {
            foreach ($request->toilet_fulljob as $key => $value) {
                ToiletFulljobInvoice::create([
                    'invoice_id'=>$invoice->id,
                    'product_id'=>$key,
                    'extra_item'=>$value['extra_item']==null ? 0 : $value['extra_item'],
                    'length'=>$value['length']==null ? 0 : $value['length'],
                    'width'=>$value['width']==null ? 0 :$value['width'],
                    'height'=>$value['height']==null ? 0 : $value['height'],
                    'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                    'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                    'total'=>$value['total']==null ? 0 : $value['total'],
                ]);
            }
        }elseif($invoiceType == 'tasteWaterInvoice'){
            foreach ($request->waste_water as $key => $value) {
                WasteWaterInvoice::create([
                    'invoice_id'=>$invoice->id,
                    'product_id'=>$key,
                    'extra_item'=>$value['extra_item']==null ? 0 : $value['extra_item'],
                    'length'=>$value['length']==null ? 0 : $value['length'],
                    'width'=>$value['width']==null ? 0 :$value['width'],
                    'height'=>$value['height']==null ? 0 : $value['height'],
                    'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                    'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                    'total'=>$value['total']==null ? 0 : $value['total'],
                ]);
            }
        }else {
            foreach ($request->waste_water_fulljob as $key => $value) {
                WasteWaterFulljobInvoice::create([
                    'invoice_id'=>$invoice->id,
                    'product_id'=>$key,
                    'extra_item'=>$value['extra_item']==null ? 0 : $value['extra_item'],
                    'length'=>$value['length']==null ? 0 : $value['length'],
                    'width'=>$value['width']==null ? 0 :$value['width'],
                    'height'=>$value['height']==null ? 0 : $value['height'],
                    'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                    'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                    'total'=>$value['total']==null ? 0 : $value['total'],
                ]);
            }
        }
        
        return redirect()->back()->with(['success'=>'Invoice Created.','invoice_id'=>$invoice->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        if ($invoice->invoice_type == 'toiletInvoice') {
            ToiletInvoice::where('invoice_id',$invoice->id)->delete();
        } elseif($invoice->invoice_type == 'toiletFulljobInvoice') {
            ToiletFulljobInvoice::where('invoice_id',$invoice->id)->delete();
        }elseif($invoice->invoice_type == 'tasteWaterInvoice') {
            WasteWaterInvoice::where('invoice_id',$invoice->id)->delete();
        }elseif($invoice->invoice_type == 'wasteWaterFulljobInvoice') {
            WasteWaterFulljobInvoice::where('invoice_id',$invoice->id)->delete();
        }
        $invoice->delete();
        return redirect()->back()->with('success','Invoice Deleted.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
