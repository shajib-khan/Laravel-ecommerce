<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductName',
        'ProductDescription',
        'ProductImage',
        'product_price',
        'category_id',


    ];
    public function Category()
    {
        return $this->hasMany(Category::class);
    }
    public function Shopingcart()
    {
        return $this->hasMany(Shopingcart::class);
    }
    public function OrderProduct()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
