<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_number',
        'product_id',
        'units',
        'cep',
        'name',
        'street',
        'street',
        'complement',
        'payment_type',
        'number_card',
        'product_price',
    ];
}
