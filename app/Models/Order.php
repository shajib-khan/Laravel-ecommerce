<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'first_name',
        'email',
        'address',
        'total_amount',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function OrderProduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }
}
