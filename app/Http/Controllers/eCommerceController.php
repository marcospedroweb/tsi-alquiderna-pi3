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

    public function returnJSONOf(Request $data)
    {
        $changePage = $data['changePage'] ?? '';
        $orderCards = $data['ordeCards'] ?? '';

        if ($changePage && $orderCards) {
            $totalOfPages = $data['totalOfPages'] ?? '';
            $startingNumber = $data['startingNumber'] ?? '';
            $finalNumber = $data['finalNumber'] ?? '';
            $actualPage = $data['actualPage'] ?? '';
            $nextPage = $data['nextPage'] ?? '';
            $lastPage = $data['lastPage'] ?? '';

            $orderByPrice = $data['orderByPrice'] ?? '';
            $orderByName = $data['orderByName'] ?? '';
            $orderByOnSale = $data['orderByOnSale'] ?? '';
            $orderByLvlMin = $data['orderByLvlMin'] ?? '';
            $orderByNews = $data['orderByNews'] ?? '';
            $orderByAttributes = $data['orderByAttributes'] ?? '';

            // $products = Product::filterProductWithoutPaginate();
        } else if ($changePage) {

            $category_name = $data['category_name'] ?? '';
            $itemClass_name = $data['itemClass_name'] ?? '';

            $totalOfPages = $data['totalOfPages'] ?? '';
            $startingNumber = $data['startingNumber'] ?? '';
            $finalNumber = $data['finalNumber'] ?? '';
            $actualPage = $data['actualPage'] ?? '';
            $nextPage = $data['nextPage'] ?? '';
            $lastPage = $data['lastPage'] ?? '';

            $products = Product::filterProductWithoutPaginate($data, $category_name, $itemClass_name);
        }

        return $products;


        // $products = Product::filterProductBy($categoryName, $itemClassName);
        // $products = json_encode($products);
        // return $products;
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

    public function productItemClass($category_name, $itemClass_name, Request $request)
    {
        if ($request->sort) {
            if (strrpos($request->sort, 'price') === 0 && strrpos($request->sort, 'asc')) {
                $orderByColumn = 'price';
                $orderByValue = 'ASC';
            } else if (strrpos($request->sort, 'price') === 0 && strrpos($request->sort, 'desc')) {
                $orderByColumn = 'price';
                $orderByValue = 'DESC';
            } else if (strrpos($request->sort, 'name') === 0 && strrpos($request->sort, 'asc')) {
                $orderByColumn = 'name';
                $orderByValue = 'ASC';
            } else {
                $orderByColumn = 'name';
                $orderByValue = 'DESC';
            }

            if ($request->has('filter') && (!empty($request->filter))) {

                $filters = [];

                foreach ($request->filter as $filter) {
                    if (strrpos($filter, 'lvl-min-'))
                        array_push($filters, array('lvlMin', str_replace('-', '', substr($filter, -2))));
                    else if (strrpos($filter, 'new-'))
                        array_push($filters, array('new', 1));
                    else if (strrpos($filter, 'onSale-'))
                        array_push($filters, array('discount_price', 0.0));
                }

                $allProducts = Product::filterProductByFilters($filters, $category_name, $itemClass_name, $orderByColumn, $orderByValue);
            } else {
                $allProducts = Product::filterProductBy($category_name, $itemClass_name, $orderByColumn, $orderByValue);
            }
        } else {
            if ($request->has('filter') && (!empty($request->filter))) {

                $filters = [];

                foreach ($request->filter as $filter) {
                    if (strrpos($filter, 'lvl-min-'))
                        array_push($filters, array('lvlMin', str_replace('-', '', substr($filter, -2))));
                    else if (strrpos($filter, 'new-'))
                        array_push($filters, array('new', 1));
                    else if (strrpos($filter, 'onSale-'))
                        array_push($filters, array('discount_price', 0.0));
                }

                $allProducts = Product::filterProductByFilters($filters, $category_name, $itemClass_name, 'name', 'ASC');
            } else {
                $allProducts = Product::filterProductBy($category_name, $itemClass_name, 'name', 'ASC');
            }
        }

        $category_name_edited = '';
        $itemClass_name_edited = '';

        if ($category_name === 'Armadura')
            $category_name_edited = 'Armaduras';
        else if ($category_name === 'Poção')
            $category_name_edited = str_replace($category_name, 'Poção', 'Poções');
        else if ($category_name === 'Grimório' && $itemClass_name === 'mágico')
            $category_name_edited = 'Grimórios';
        else if ($category_name === 'Arma física' && $itemClass_name === 'espada')
            $itemClass_name_edited = 'Espadas';
        else if ($category_name === 'Arma física' && $itemClass_name === 'machado')
            $itemClass_name_edited = 'Machados';
        else if ($category_name === 'Arma física' && $itemClass_name === 'arco')
            $itemClass_name_edited = 'Arcos';
        else
            $itemClass_name_edited = 'Varinhas';


        return view('product.itemClass')->with([
            // 'teste' => strpos($filters[0][0], ''),
            'checked' => $request->has('filter') ? $request->filter : [],
            'category_name_edited' => $category_name_edited,
            'category_name' => $category_name,
            'itemClass_name' => $itemClass_name,
            'itemClass_name_edited' => $itemClass_name_edited,
            'allProducts' => $allProducts,
        ]);
    }
}
