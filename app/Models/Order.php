<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_number',
        'user_id',
        'product_id',
        'units',
        'cep',
        'name',
        'street',
        'number',
        'complement',
        'payment_type',
        'number_card',
        'product_price',
        'level',
        'durability',
        'enchant',
        'enchant_life',
        'enchant_mana',
        'enchant_speed',
        'enchant_strength',
        'enchant_physical_protection',
        'enchant_magic_protection',
        'enchant_physical_attack',
        'enchant_magic_attack',
        'breakage_guarantee',
        'breakage_guarantee_months',
        'theft_guarantee',
        'theft_guarantee_months',
        'product_total_price',
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
