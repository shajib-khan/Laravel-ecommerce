<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable=[

        'first_name',
        'email',
        'address',
        'order_id',
        'product_id',
        'user_id'
    ];
    use HasFactory;
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public  function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Shopingcart(){
        return $this->hasMany(Shopingcart::class);
    }
}
