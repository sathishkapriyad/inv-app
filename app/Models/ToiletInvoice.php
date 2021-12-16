<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToiletInvoice extends Model
{
    use HasFactory;

    protected $fillable=[
        'invoice_id', 'product_id', 'extra_item', 'length', 'width', 'height', 'quantity', 'unit_price', 'total',
    ];
}
