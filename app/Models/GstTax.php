<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GstTax extends Model
{
    protected $table='gst_taxes';
    protected $fillable = ['name', 'percentage'];
}
