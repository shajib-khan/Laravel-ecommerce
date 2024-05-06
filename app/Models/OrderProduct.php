<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable=[
        'product_id',
        'user_id',
        'first_name',
        'email',
        'address'
    ];
    use HasFactory;
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public  function User()
    {
        return $this->belongsTo(User::class);
    }
}
