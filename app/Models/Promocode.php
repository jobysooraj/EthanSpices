<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    protected $fillable = [
        'promocode',
        'description',
        'discount_type',
        'discount_value',
        'min_order_amount',
        'max_discount',
        'start_date',
        'end_date',
        'usage_limit',
        'usage_per_user_limit',
        'status',
    ];
    // In your Eloquent model
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
