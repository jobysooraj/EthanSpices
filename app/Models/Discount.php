<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'name',
        'discount_type',
        'amount',
        'valid_from',
        'valid_until',
    ];
}
