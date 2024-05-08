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
       return $this->belongsTo(Product::class);
    }
    public function OrderProduct(){
        return $this->belongsTo(OrderProduct::class);
    }

}
