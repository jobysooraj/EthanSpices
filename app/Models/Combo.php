<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $fillable = ['name', 'code', 'image', 'gsttax_id', 'combo_price', 'description', 'status'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'combo_product');
    }
}
