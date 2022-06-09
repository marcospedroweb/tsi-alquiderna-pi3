<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::where('user_id', Auth()->user()->id)->get();
        $totalPrice = 0;
        foreach ($items as $item)
            $totalPrice += $item->product_total_price;
        return view('cart.index')->with([
            'items' => $items,
            'total' => $totalPrice,
        ]);
    }

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

            $cart = Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'units' => 1,
                'level' => $request->lvl_selected,
                'product_lvl_price' => $request->product_lvl_price,
                'durability' => $request->durability,
                'enchant' => $request->enchant,
                'product_enchant_price' => $request->product_enchant_price,
                'enchant_life' => $request->life ?? 0,
                'enchant_mana' => $request->mana ?? 0,
                'enchant_speed' => $request->speed ?? 0,
                'enchant_strength' => $request->strength ?? 0,
                'enchant_physical_protection' => $request->physical_protection ?? 0,
                'enchant_magic_protection' => $request->magic_protection ?? 0,
                'enchant_physical_attack' => $request->physical_attack ?? 0,
                'enchant_magic_attack' => $request->magic_attack ?? 0,
                'breakage_guarantee' => $request->breakage_guarantee,
                'breakage_guarantee_months' => $request->breakage_guarantee_months,
                'product_breakage_price' => $request->product_breakage_guarantee_price,
                'theft_guarantee' => $request->theft_guarantee,
                'theft_guarantee_months' => $request->theft_guarantee_months,
                'product_theft_price' => $request->product_theft_guarantee_price,
                'product_total_price' => $request->product_total_price,
            ]);
        }

        session()->flash('success', 'O produto (' . $product->name . ') foi adicionado ao carrinho.');
        return redirect()->route('cart.index');
    }

    public function update(int $order, Request $request)
    {
        $cart = Cart::where('id', $order)->first();

        $result = $cart->update([
            'level' => $request->lvl_selected,
            'product_lvl_price' => $request->product_lvl_price,
            'durability' => $request->durability,
            'enchant' => $request->enchant,
            'product_enchant_price' => $request->product_enchant_price,
            'enchant_life' => $request->life ?? 0,
            'enchant_mana' => $request->mana ?? 0,
            'enchant_speed' => $request->speed ?? 0,
            'enchant_strength' => $request->strength ?? 0,
            'enchant_physical_protection' => $request->physical_protection ?? 0,
            'enchant_magic_protection' => $request->magic_protection ?? 0,
            'enchant_physical_attack' => $request->physical_attack ?? 0,
            'enchant_magic_attack' => $request->magic_attack ?? 0,
            'breakage_guarantee' => $request->breakage_guarantee,
            'breakage_guarantee_months' => $request->breakage_guarantee_months,
            'product_breakage_price' => $request->product_breakage_guarantee_price,
            'theft_guarantee' => $request->theft_guarantee,
            'theft_guarantee_months' => $request->theft_guarantee_months,
            'product_theft_price' => $request->product_theft_guarantee_price,
            'product_total_price' => $request->product_total_price,
        ]);
        if ($result)
            session()->flash('success', 'Produto atualizado com sucesso');
        else
            session()->flash('error', 'Houve um erro ao atualizar, tente novamente');

        return redirect(route('cart.index'));
    }

    public function unit(int $order_id, Request $request)
    {

        $cart = Cart::where('id', $order_id)->first();

        //There is product in cart
        if ($cart) {
            // dd($cart->product_total_price);
            if ($request->value === 'minus') {
                $cart->update([
                    'units' => $cart->units - 1,
                    'product_total_price' => $cart->product_total_price - ($cart->product_total_price / $cart->units)
                ]);
                session()->flash('success', 'Foi removido 1 unidade do produto');
            } else {
                $cart->update([
                    'units' => $cart->units + 1,
                    'product_total_price' => $cart->product_total_price + ($cart->product_total_price / $cart->units)
                ]);
                session()->flash('success', 'Foi adicionado mais 1 unidade do produto');
            }
        } else {
            session()->flash('error', 'Houve um erro, o produto não está adicionado na cesta');
        }

        return redirect()->route('cart.index');
    }

    public function payment()
    {
        $items = Cart::where('user_id', Auth()->user()->id)->get();
        $totalPrice = 0;
        foreach ($items as $item)
            $totalPrice += $item->product_total_price;
        return view('cart.payment')->with([
            'items' => $items,
            'total' => $totalPrice,
        ]);
    }

    public function confirmOrder(Request $request)
    {
        $user = auth()->user();
        $order_number = rand(100000, 999999);
        while (Order::where('order_number', $order_number)->first() != null)
            $order_number = rand(10000, 99999);
        $products = Cart::where('user_id', $user->id)->get();
        $result = 0;

        foreach ($products as $product)
            $result = Order::create([
                'order_number' => $order_number,
                'user_id' => $user->id,
                'product_id' => $product->Product->id,
                'units' => $product->units,
                'cep' => $request->cep,
                'name' => $request->name,
                'street' => $request->street,
                'number' => $request->number,
                'complement' => $request->complement,
                'payment_type' => $request->payment_type,
                'number_card' => $request->number_card ?? 0,
                'product_price' => $product->product_total_price,
                'level' => $product->level,
                'durability' => $product->durability,
                'enchant' => $product->enchant,
                'enchant_life' => $product->enchant_life ?? 0,
                'enchant_mana' => $product->enchant_mana ?? 0,
                'enchant_speed' => $product->enchant_speed ?? 0,
                'enchant_strength' => $product->enchant_strength ?? 0,
                'enchant_physical_protection' => $product->enchant_physical_protection ?? 0,
                'enchant_magic_protection' => $product->enchant_magic_protection ?? 0,
                'enchant_physical_attack' => $product->enchant_physical_attack ?? 0,
                'enchant_magic_attack' => $product->enchant_magic_attack ?? 0,
                'breakage_guarantee' => $product->breakage_guarantee,
                'breakage_guarantee_months' => $product->breakage_guarantee_months,
                'theft_guarantee' => $product->theft_guarantee,
                'theft_guarantee_months' => $product->theft_guarantee_months,
            ]);

        if ($result)
            session()->flash('success', 'Compra confirmada com sucesso');
        else {
            session()->flash('error', 'Houve um erro ao confirmar a compra, tente novamente');
            return redirect(route('index'));
        }

        foreach ($products as $product)
            $product->delete();

        return view('cart.confirm')->with([
            'order_number' => $order_number,
            'payment_type' => $request->payment_type,
        ]);
    }

    public function destroy(int $cart)
    {
        $cart_product = Cart::where('id', $cart)->first();
        $cart_product->delete();
        session()->flash('success', 'Produto removido da cesta com sucesso');
        return redirect(route('cart.index'));
    }
}
