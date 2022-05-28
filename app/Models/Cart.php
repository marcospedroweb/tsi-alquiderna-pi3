<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'units',
        'level',
        'product_lvl_price',
        'durability',
        'enchant',
        'product_enchant_price',
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
        'product_breakage_price',
        'theft_guarantee',
        'theft_guarantee_months',
        'product_theft_price',
        'product_total_price',
    ]; // Laravel preenchera essa coluna

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
