<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopingcart extends Model
{
    use HasFactory;
    protected $fillable = ['total_quantity', 'product_id','user_id'];
    public function Product()
    {
       return $this->hasMany(Product::class);
    }

}
