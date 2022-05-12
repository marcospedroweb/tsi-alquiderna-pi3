<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\ItemClass;
use App\Models\SourceWebsite;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('product.index')->with([
            'products' => Product::orderBy('created_at', 'DESC')->paginate(12),
            'allProductsByCategory' => Product::returnAllProductsByCategory(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create')->with([
            'categories' => Category::all(),
            'itemClasses' => ItemClass::all(),
            'sourceWebsites' => SourceWebsite::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Para funcionar o storage é necessario executar o comando [php artisan storage:link]
        if ($request->image) {
            $requestImage = $request->image; // Recebe o resquest da imagem
            $extension = $requestImage->extension(); // Recebe a extensão da imagem
            //Verificando se a extensão é valida
            if ($extension !== 'jpeg' && $extension !== 'jpg' && $extension !== 'png') {
                session()->flash('error', 'Imagem invalida');
                return redirect(route('product.create'));
                dd('erro');
            }

            // Salvando a arquivo da imagem com nome aleatorio
            $path = $request->file('image')->store('public/itens'); // [$request->file('nameDoInput')->store('public/{suaPasta}')]
            //[str_replace('public', 'storage', $file)] e armazenar isso no banco
        }

        $data = $request->all(); // Retornando os valores de todos os inputs
        $data['image'] = str_replace('public', 'storage', $path); //Salvando no banco o link para imagem
        Product::create($data); //Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa

        session()->flash('success', 'Produto criado com sucesso');
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        // Leva a Product para pagina para edit
        return view('product.edit')->with([
            'product' => $product,
            'categories' => Category::all(),
            'itemClasses' => ItemClass::all(),
            'sourceWebsites' => SourceWebsite::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, Request $request)
    {
        $data = $request->all(); // Retornando os valores de todos os inputs

        // Para funcionar o storage é necessario executar o comando [php artisan storage:link]
        if ($request->image) {
            $requestImage = $request->image; // Recebe o resquest da imagem
            $extension = $requestImage->extension(); // Recebe a extensão da imagem
            //Verificando se a extensão é valida
            if ($extension !== 'jpeg' && $extension !== 'jpg' && $extension !== 'png') {
                session()->flash('error', 'Imagem invalida');
                return redirect(route('product.create'));
                dd('erro');
            }

            // Salvando a arquivo da imagem com nome aleatorio
            $path = $request->file('image')->store('public/itens'); // [$request->file('nameDoInput')->store('public/{suaPasta}')]
            //[str_replace('public', 'storage', $file)] e armazenar isso no banco
            $data['image'] = str_replace('public', 'storage', $path); //Salvando no banco o link para imagem
        }

        // Leva a Product para pagina para edit
        // [Product $product] é a Product que deve ser atualizada
        // [Request $request] Recebe todos os dados que irão substituir a $product
        $product->update($data);
        session()->flash('success', 'Produto editado com sucesso');
        return redirect(route('product.index')); // para onde ta voltando
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Produto apagada com sucesso');
        return redirect(route('product.index'));
    }

    public function trash()
    {
        return view('product.trash')->with('products', Product::onlyTrashed()->get()); // Retorna todos os elementos com soft delete
    }

    public function restore($product_id)
    {
        // Recebe como parametro o id que deseja ser restaurado
        $product = Product::onlyTrashed()->where('id', $product_id)->first(); // Retorna o id daquela linha "apagada"
        $product->restore(); // Restaura aquela linha
        session()->flash('success', 'Produto restaurada com sucesso');
        return redirect(route('itemClass.index'));
    }

    public function forceDelete($product_id)
    {
        // Para deletar permanentemente, o find comum não encontrará esse id já que ele está "excluido"
        // Para buscarmos esse id no banco é necessario utilizar o [product::onlyTrashed()] que retornará todos as products "deletadas"
        // Depois utilizar o [->where('colunaDesejada', $variavelComOValor)->first()], para encontrar aquela coluna (geralmente id), passando a variavel com o valor que é igual a da coluna e [first()] que retornará o primeiro resultado que ele encontrar
        $product = Product::onlyTrashed()->where('id', $product_id)->first();
        $product->forceDelete(); // Apaga totalmente aquele dado
        session()->flash('success', 'Produto deletado PERMANENTEMENTE com sucesso'); //[session()->flash()] consiste em uma flash message, mostra a mensagem para o usuario rapidamente, depois apaga isso da memoria
        return redirect(route('product.trash'));
    }


    public function filterBy(Request $request)
    {
        //filter product/admin
        $category = $request->filterByCategory ?? '';
        $itemClass = $request->filterByItemClass ?? '';
        $orderByColumn = $request->filterByOrderByColumn ?? '';
        $orderByValue = $request->filterByOrderByValue ?? '';

        $products = Product::filterProductBy($category, $itemClass, $orderByColumn, $orderByValue);

        switch ($orderByValue) {
            case 'DESC':
                $orderByValue = 'decrescente';
                break;
            case 'ASC':
                $orderByValue = 'crescente';
                break;
        }

        return view('product.index')->with([
            'filterByOrderByColumn' => $orderByColumn,
            'filterByOrderByValue' => $orderByValue,
            'filterByCategory' => $category,
            'filterByItemClass' => $itemClass,
            'products' => $products,
            'allProductsByCategory' => Product::returnAllProductsByCategory(),
        ]);
    }
}
