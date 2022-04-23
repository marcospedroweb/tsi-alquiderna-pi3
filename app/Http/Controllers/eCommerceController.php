<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class eCommerceController extends Controller
{
    public function index()
    {
        return view('index')->with('newProducts', Product::newProducts());
    }
}
