<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Visiting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class VisitingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $visitings=Visiting::all();
        if (isset($request->date)) {
            $date=Carbon::parse($request->date)->format('Y-m-d');
            Cookie::queue('site_visit_date', $date, 10);
        }
        if (Cookie::get('site_visit_date') !== null) {
            $site_visit_date=Cookie::get('site_visit_date');
            $visitings=Visiting::where('site_visit_date',$site_visit_date)->get();
        }
        if(request()->ajax())
        {
            Cookie::queue(Cookie::forget('site_visit_date'));
                return datatables()->of($visitings)
                        ->addColumn('select', function($data){
                            return '<input type="checkbox" name="selectedData['.$data->id.']" value="true">';
                        })
                        ->addColumn('reference_no', function($data){
                            return $data->reference_no.'<input style="display:none" type"text" name="reference_no['.$data->id.']" value="'.$data->reference_no.'">';
                        })
                        ->addColumn('visiting_date', function($data){
                            if ($data->site_visit_date == null) {
                                return '-<input style="display:none" type"text" name="site_visit_date['.$data->id.']" value="-">';
                            }else{
                                return $data->site_visit_date.'<input style="display:none" type"text" name="site_visit_date['.$data->id.']" value="'.$data->site_visit_date.'">';
                            }
                        })
                        ->addColumn('name', function($data){
                            return $data->first_name.' '. $data->last_name.'<input style="display:none" type"text" name="name['.$data->id.']" value="'.$data->first_name.' '. $data->last_name.'">';
                        })
                        ->addColumn('user_address', function($data){
                            return $data->user_address.'<input style="display:none" type"text" name="user_address['.$data->id.']" value="'.$data->user_address.'">';
                        })
                        ->addColumn('near_city', function($data){
                            return $data->near_city.'<input style="display:none" type"text" name="near_city['.$data->id.']" value="'.$data->near_city.'">';
                        })
                        ->addColumn('contact_no', function($data){
                            return $data->contact_no.'<input style="display:none" type"text" name="contact_no['.$data->id.']" value="'.$data->contact_no.'">';
                        })
                        ->addColumn('status', function($data){
                            if ($data->status == '1') {
                                return '<span class="right badge badge-primary">Visited</span><input style="display:none" type"text" name="status['.$data->id.']" value="'.$data->status.'">';
                            }elseif ($data->status == '2') {
                                return '<span class="right badge badge-success">Job Done</span><input style="display:none" type"text" name="status['.$data->id.']" value="'.$data->status.'">';
                            }else {
                                return '<span class="right badge badge-info">Visit Pending</span><input style="display:none" type"text" name="status['.$data->id.']" value="'.$data->status.'">';
                            }
                        })
                        ->addColumn('addtional_info', function($data){
                            return '<input type="text" name="addtional_info['.$data->id.']">';
                        })
                        ->addColumn('actions', function($data){
                            return '<a href="'.route('user.visiting.edit',$data->id).'" class="btn btn-warning btn-sm">Update</a>&nbsp;&nbsp;<a href="'.route('user.visiting.show',$data->id).'" class="btn btn-danger btn-sm mt-3">Delete</a>';
                        })
                        ->rawColumns(['select','reference_no','visiting_date','name','user_address','near_city','contact_no','status','addtional_info','actions'])
                        ->make(true);
        }
        return view('user.visiting.index',['visitings'=>$visitings]);
    }

    public function visitPrint(Request $request)
    {
        $data='<table id="invoiceTablePrint" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Reference No</th>
                        <th>Visiting Date</th>
                        <th>Customer Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Near City</th>
                        <th>Status</th>
                        <th>Additional Info</th>
                    </thead>
                    <tbody>
            ';
            if (isset($request->selectedData)) {
                foreach ($request->selectedData as $key => $value) {
                    $data.='
                            <tr>
                                <td>'.$request->reference_no[$key].'</td>
                                <td>'.$request->site_visit_date[$key].'</td>
                                <td>'.$request->name[$key].'</td>
                                <td>'.$request->contact_no[$key].'</td>
                                <td>'.$request->user_address[$key].'</td>
                                <td>'.$request->near_city[$key].'</td>';
                                if ($request->status[$key] == '1') {
                                    $data.='<td>Visited</td>';
                                }elseif ($request->status[$key] == '2') {
                                    $data.='<td>Job Done</td>';
                                }else {
                                    $data.='<td>Visit Pending</td>'; 
                                }
                    $data.='    <td><input type"text" value="'.$request->addtional_info[$key].'"></td>
                            </tr>
                    ';
                }
            }else{
                $data.='
                            <tr>
                                <td colspan="5" align="center">No data selected</td>
                            </tr>
                    ';
            }
        
        $data.='</tbody></table>';
        // foreach ($request->selectedData as $key => $value) {
        //    $data[]=$key;
        // }
        return response()->json(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.visiting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->site_visit_fee) || $request->site_visit_fee != null || $request->site_visit_fee != '') {
            $request->validate([
                'site_visit_fee'=>'numeric'
            ]);
        }
        Visiting::create([
            'reference_no'=>$request->reference_no,
            'first_name'=>$request->first_name,
            'contact_no'=>$request->contact_no,
            'user_address'=>$request->user_address,
            'last_name'=>$request->last_name,
            'contact_home'=>$request->contact_home,
            'near_city'=>$request->near_city,
            'email'=>$request->email,
            'service_category'=>$request->service_category,
            'water_level'=>$request->water_level,
            'site_visit'=>$request->site_visit,
            'site_visit_date'=>$request->site_visit_date,
            'site_visit_fee'=>$request->site_visit_fee,
        ]);
        return redirect()->back()->with('success','Visiting Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function show(Visiting $visiting)
    {
        $visiting->delete();
        return redirect()->back()->with('success','Visiting Deleted.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function edit(Visiting $visiting)
    {
        return view('user.visiting.edit',['visiting'=>$visiting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visiting $visiting)
    {
        if (isset($request->site_visit_fee) || $request->site_visit_fee != null || $request->site_visit_fee != '') {
            $request->validate([
                'site_visit_fee'=>'numeric'
            ]);
        }
        Visiting::where('id',$visiting->id)->update([
            'reference_no'=>$request->reference_no,
            'first_name'=>$request->first_name,
            'contact_no'=>$request->contact_no,
            'user_address'=>$request->user_address,
            'last_name'=>$request->last_name,
            'contact_home'=>$request->contact_home,
            'near_city'=>$request->near_city,
            'email'=>$request->email,
            'service_category'=>$request->service_category,
            'water_level'=>$request->water_level,
            'site_visit'=>$request->site_visit,
            'site_visit_date'=>$request->site_visit_date,
            'site_visit_fee'=>$request->site_visit_fee,
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('success','Visiting Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visiting $visiting)
    {
        //
    }
}