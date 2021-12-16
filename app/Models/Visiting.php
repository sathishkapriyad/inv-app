<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiting extends Model
{
    use HasFactory;

    protected $fillable=[
        'reference_no', 'first_name', 'contact_no', 'user_address', 'last_name', 'contact_home', 'near_city', 'email', 'service_category',
        'water_level', 'site_visit', 'site_visit_date', 'site_visit_fee', 'status',
    ];
}
