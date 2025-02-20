<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'supplier_id',
        'gsttax_id',
        'slug',
        'name',
        'price',
        'short_description',
        'description',
        'batch_no',
        'hsn_code',
        'status',
        
    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A product belongs to a supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // A product belongs to a GST tax
    public function gstTax()
    {
        return $this->belongsTo(GstTax::class,'gsttax_id','id');
    }
    public function combos()
    {
        return $this->belongsToMany(Combo::class, 'combo_product');
    }
}
