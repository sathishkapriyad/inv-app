<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id', 'visiting_id', 'quotation_no', 'pdf_path', 'invoice_type',
    ];

    public function visiting()
    {
        return $this->belongsTo(Visiting::class);
    }

    public function toiletSingleJobInvoices()
    {
        return $this->hasMany(ToiletInvoice::class);
    }

    public function toiletFullJobInvoices()
    {
        return $this->hasMany(ToiletFulljobInvoice::class);
    }

    public function wasteWaterSingleJobInvoices()
    {
        return $this->hasMany(WasteWaterInvoice::class);
    }

    public function wasteWaterFullJobInvoices()
    {
        return $this->hasMany(WasteWaterFulljobInvoice::class);
    }
}
