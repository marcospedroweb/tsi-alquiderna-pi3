<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class eCommerceController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'newProducts' => Product::where('new', 1)->take(7)->get(),
            'heavyArmors' => Product::categoryProducts('Armadura', 'pesada'),
        ]);
    }

    public function returnJSONOf(string $categoryName, string $itemClassName)
    {
        $products = Product::categoryProducts($categoryName, $itemClassName);
        $products = json_encode($products);
        return $products;
    }
}
