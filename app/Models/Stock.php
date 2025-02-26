<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'category_id',
        'product_id',
        'total_quantity',
        'used_quantity',
        'balanced_quantity',
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function setUsedQuantityAttribute($value)
    {
        $this->attributes['used_quantity'] = $value;
        $totalQuantity = $this->attributes['total_quantity'] ?? 0;
        $this->attributes['balanced_quantity'] = $totalQuantity - $value;
    }

    // Mutator for total_quantity
    public function setTotalQuantityAttribute($value)
    {
        $this->attributes['total_quantity'] = $value;
        $usedQuantity = $this->attributes['used_quantity'] ?? 0;
        $this->attributes['balanced_quantity'] = $value - $usedQuantity;
    }
}
