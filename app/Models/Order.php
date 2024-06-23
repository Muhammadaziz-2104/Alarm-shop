<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['shoppingcart_id','payment_id','order_status','amount'];

    public function shoppingcart()
    {
        return $this->belongsTo(Shoppingcart::class);
    }

}
