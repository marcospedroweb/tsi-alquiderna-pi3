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
            'carouselProduct1' => Product::where('id', 16)->first(),
            'carouselProduct2' => Product::where('id', 11)->first(),
            'carouselProduct3' => Product::where('id', 66)->first(),
            'newProducts' => Product::where('new', 1)->take(7)->get(),
            'heavyArmors' => Product::filterProductBy('Armadura', 'pesada'),
            'productBigBanner1' => Product::where('id', 23)->first(),
            'productSmallBanner1' => Product::where('id', 48)->first(),
            'productSmallBanner2' => Product::where('id', 47)->first(),
            'productBigBanner2' => Product::where('id', 17)->first(),
        ]);
    }

    public function productCategory($category_name)
    {
        //Page category
        $allProductsByCategory = Product::filterProductBy($category_name, '', 'name', 'DESC');
        $newProductsByCategory = Product::filterProductBy($category_name, '', 'new', 'DESC', 7);
        $beginnerProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'ini', 7);
        $mediumProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'int', 7);
        $advancedProductsByCategory = Product::filterProductByColumn($category_name, '', 'recommendation', 'avan', 7);
        $productsOnSaleByCategory = Product::filterProductByColumn($category_name, '', 'sale', 1, 7);
        $productsByItemClass = Product::filterProductByItemClass($category_name);

        /* Banners */
        switch ($category_name) {
            case 'Armadura':
                $productBigBanner1 = Product::where('id', 72)->first();
                $productSmallBanner1 = Product::where('id', 84)->first();
                $productSmallBanner2 = Product::where('id', 109)->first();
                $productBigBanner2 = Product::where('id', 88)->first();
                $productBigBanner3 = Product::where('id', 100)->first();
                $productSmallBanner3 = Product::where('id', 4)->first();
                $productSmallBanner4 = Product::where('id', 107)->first();
                $productBigBanner4 = Product::where('id', 98)->first();
                break;
            case 'Arma física':
                $productBigBanner1 = Product::where('id', 23)->first();
                $productSmallBanner1 = Product::where('id', 15)->first();
                $productSmallBanner2 = Product::where('id', 34)->first();
                $productBigBanner2 = Product::where('id', 30)->first();
                $productBigBanner3 = Product::where('id', 26)->first();
                $productSmallBanner3 = Product::where('id', 28)->first();
                $productSmallBanner4 = Product::where('id', 31)->first();
                $productBigBanner4 = Product::where('id', 78)->first();
                break;
            case 'Arma mágica':
                $productBigBanner1 = Product::where('id', 51)->first();
                $productSmallBanner1 = Product::where('id', 45)->first();
                $productSmallBanner2 = Product::where('id', 64)->first();
                $productBigBanner2 = Product::where('id', 61)->first();
                $productBigBanner3 = Product::where('id', 60)->first();
                $productSmallBanner3 = Product::where('id', 62)->first();
                $productSmallBanner4 = Product::where('id', 59)->first();
                $productBigBanner4 = Product::where('id', 57)->first();
                break;
            case 'Poção':
                $productBigBanner1 = Product::where('id', 49)->first();
                $productSmallBanner1 = Product::where('id', 44)->first();
                $productSmallBanner2 = Product::where('id', 37)->first();
                $productBigBanner2 = Product::where('id', 40)->first();
                $productBigBanner3 = Product::where('id', 39)->first();
                $productSmallBanner3 = Product::where('id', 48)->first();
                $productSmallBanner4 = Product::where('id', 47)->first();
                $productBigBanner4 = Product::where('id', 42)->first();
                break;
            case 'Grimório':
                $productBigBanner1 = Product::where('id', 56)->first();
                $productSmallBanner1 = Product::where('id', 53)->first();
                $productSmallBanner2 = Product::where('id', 52)->first();
                $productBigBanner2 = Product::where('id', 43)->first();
                $productBigBanner3 = Product::where('id', 54)->first();
                $productSmallBanner3 = Product::where('id', 55)->first();
                $productSmallBanner4 = Product::where('id', 46)->first();
                $productBigBanner4 = Product::where('id', 54)->first();
                break;
            default:
                dd('erro');
        }


        return view('product.category')->with([
            'category_name' => $category_name,
            'allProductsByCategory' => $allProductsByCategory,
            'newProductsByCategory' => $newProductsByCategory,
            'beginnerProductsByCategory' => $beginnerProductsByCategory,
            'mediumProductsByCategory' => $mediumProductsByCategory,
            'advancedProductsByCategory' => $advancedProductsByCategory,
            'productsOnSaleByCategory' => $productsOnSaleByCategory,
            'productsByItemClass' => $productsByItemClass,
            'productBigBanner1' => $productBigBanner1,
            'productSmallBanner1' => $productSmallBanner1,
            'productSmallBanner2' => $productSmallBanner2,
            'productBigBanner2' => $productBigBanner2,
            'productBigBanner3' => $productBigBanner3,
            'productSmallBanner3' => $productSmallBanner3,
            'productSmallBanner4' => $productSmallBanner4,
            'productBigBanner4' => $productBigBanner4,
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
                    else if (strrpos($filter, 'kit-'))
                        array_push($filters, array('kit', 1));
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
                    else if (strrpos($filter, 'kit-'))
                        array_push($filters, array('kit', 1));
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

        if ($request->has('filter'))
            $allProducts = $allProducts->appends(['filter' => $request->has('filter') ? $request->filter : []]);
        if ($request->sort)
            $allProducts = $allProducts->appends(['sort' => $request->sort]);


        return view('product.itemClass')->with([
            'checked' => $request->has('filter') ? $request->filter : [],
            'category_name_edited' => $category_name_edited,
            'category_name' => $category_name,
            'itemClass_name' => $itemClass_name,
            'itemClass_name_edited' => $itemClass_name_edited,
            'allProducts' => $allProducts,
        ]);
    }

    public function productShow(Product $product)
    {
        $productsWithSameCategory = Product::filterProductBy($product->Category->name, $product->ItemClass->name, 'price', 'ASC', 7, 'withKits');
        $productsWithOtherCategory = [];

        foreach (Category::all() as $category)
            if ($product->Category->name !== $category->name)
                array_push($productsWithOtherCategory, [Product::filterProductBy($category->name, '', 'price', 'ASC', 7, 'withKits'), $category->name]);

        return view('product.show', [
            'category_name' => $product->Category->name,
            'mainProduct' => $product,
            'productsWithSameCategory' => $productsWithSameCategory,
            'productsWithOtherCategory1' => $productsWithOtherCategory[0],
            'productsWithOtherCategory2' => $productsWithOtherCategory[1],
            'productsWithOtherCategory3' => $productsWithOtherCategory[2],
            'productsWithOtherCategory4' => $productsWithOtherCategory[3],
        ]);
    }

    public function search(Request $request)
    {
        $products = Product::where('name', $request->inputSearch)
            ->orWhere('name', 'like', '%' . $request->inputSearch . '%')->get();
        return view('search.index')->with([
            'products' => $products,
            'search_name' => $request->inputSearch
        ]);
    }
}
