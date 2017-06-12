<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'cart', 'name', 'address', 'postal_code', 'city', 'country', 'payment_id'];
}
