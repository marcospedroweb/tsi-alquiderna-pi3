<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());//Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa
        session()->flash('success', 'Produto criada com sucesso');
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
        return view('product.edit')->with('Product', $product);
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
        // Leva a Product para pagina para edit
        // [Product $product] é a Product que deve ser atualizada
        // [Request $request] Recebe todos os dados que irão substituir a $product
        $product->update($request->all());
        session()->flash('success', 'Produto editada com sucesso');
        return redirect(route('product.index'));// para onde ta voltando
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

    public function trash(){
        return view('product.trash')->with('products', Product::onlyTrashed()->get());// Retorna todos os elementos com soft delete
    }

    public function restore($product_id){
        // Recebe como parametro o id que deseja ser restaurado
        $product = Product::onlyTrashed()->where('id', $product_id)->first(); // Retorna o id daquela linha "apagada"
        $product->restore(); // Restaura aquela linha
        session()->flash('success', 'Produto restaurada com sucesso');
        return redirect(route('itemClass.index'));
    }
}
