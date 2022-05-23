<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Product $product, Request $request)
    {
        $user = auth()->user();

        $cart = Cart::where([
            'user_id' => $user->id,
            'product_id' => $product->id
        ])->first();

        //There is product in cart
        if ($cart) {
            $cart->update([
                'units' => $cart->units + 1,
            ]);
        } else {
            if ($request->durability === 0)
                $lvl = $product->lvlMin;
            else if ($product->lvlMin === 0) {

                for ($durability = 0; $durability <= 300; $durability += 100)
                    if ($request->durability === $durability)
                        $lvl = $durability / 10;
            } else if ($product->lvlMin === 31) {

                for ($durability = 200; $durability <= 600; $durability += 200)
                    for ($lvlSelected = 40; $lvlSelected <= 60; $lvlSelected += 10)
                        if ($request->durability === $durability)
                            $lvl = $lvlSelected;
            } else {

                for ($durability = 300; $durability <= 1200; $durability += 300)
                    for ($lvlSelected = 70; $lvlSelected <= 100; $lvlSelected += 10)
                        if ($request->durability === $durability)
                            $lvl = $lvlSelected;
            }

            $cart = Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'units' => 1,
                'level' => $lvl,
                'durability' => $request->durability,
                'enchant' => $request->enchant,
                'enchant_life' => $request->life ?? 0,
                'enchant_mana' => $request->mana,
                'enchant_speed' => $request->speed,
                'enchant_strength' => $request->strength,
                'enchant_physical_protection' => $request->physical_protection,
                'enchant_magic_protection' => $request->magic_protection,
                'enchant_physical_attack' => $request->physical_attack,
                'enchant_magic_attack' => $request->magic_attack,
                'breakage_guarantee' => $request->breakage_guarantee,
                'breakage_guarantee_months' => $request->breakage_guarantee_months,
                'theft_guarantee' => $request->theft_guarantee,
                'theft_guarantee_months' => $request->theft_guarantee_months,
            ]);
        }

        session()->flash('success', 'O produto (' . $product->name . ') foi adicionado ao carrinho.');
        return redirect()->back();
    }
}
