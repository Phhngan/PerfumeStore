<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'cat_id';
    protected $fillable = ['cat_name', 'cat_description'];
    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }
}
