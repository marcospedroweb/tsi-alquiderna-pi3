<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class eCommerceController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'newProducts' => Product::where('new', 1)->take(7)->get(),
            'heavyArmors' => Product::filterProductBy('Armadura', 'pesada'),
        ]);
    }

    public function returnJSONOf(string $categoryName, string $itemClassName)
    {
        $products = Product::filterProductBy($categoryName, $itemClassName);
        $products = json_encode($products);
        return $products;
    }

    public function productCategory($category_name)
    {
        $allProductsByCategory = Product::filterProductBy($category_name, '', 'name', 'DESC');
        $newProductsByCategory = Product::filterProductBy($category_name, '', 'new', 'DESC', 7);
        $beginnerProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'ini', 7);
        $mediumProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'int', 7);
        $advancedProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'avan', 7);
        $productsOnSaleByCategory = Product::filterProductByColumn($category_name, '', 'sale', 1, 7);
        $productsByItemClass = Product::filterProductByItemClass($category_name);


        return view('product.category')->with([
            'category_name' => $category_name,
            'allProductsByCategory' => $allProductsByCategory,
            'newProductsByCategory' => $newProductsByCategory,
            'beginnerProductsByCategory' => $beginnerProductsByCategory,
            'mediumProductsByCategory' => $mediumProductsByCategory,
            'advancedProductsByCategory' => $advancedProductsByCategory,
            'productsOnSaleByCategory' => $productsOnSaleByCategory,
            'productsByItemClass' => $productsByItemClass,
        ]);
    }
}
