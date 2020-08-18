<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'quantity', 'doctor_prescription', 'medicine_photo', 'price','location','phonenumber','user_id'
    ];
}
