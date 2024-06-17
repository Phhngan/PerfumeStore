<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'cat_id', 'brand_id', 'product_name', 'price_origin', 'product_price', 
        'description', 'product_image'
    ];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id');
    }
    
}
