<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());//Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa
        session()->flash('success', 'Categoria criada com sucesso');
        return redirect(route('category.index'));
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
    public function edit(Category $category)
    {
        // Leva a Category para pagina para edit
        return view('category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category, Request $request)
    {
        // Leva a Category para pagina para edit
        // [Category $category] é a Category que deve ser atualizada
        // [Request $request] Recebe todos os dados que irão substituir a $category
        $category->update($request->all());
        session()->flash('success', 'Categoria editada com sucesso');
        return redirect(route('category.index'));// para onde ta voltando
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Categoria apagada com sucesso');
        return redirect(route('category.index'));
    }

    public function trash(){
        return view('category.trash')->with('categories', Category::onlyTrashed()->get());// Retorna todos os elementos com soft delete
    }

    public function restore($category_id){
        // Recebe como parametro o id que deseja ser restaurado
        $category = Category::onlyTrashed()->where('id', $category_id)->first(); // Retorna o id daquela linha "apagada"
        $category->restore(); // Restaura aquela linha
        session()->flash('success', 'Categoria restaurada com sucesso');
        return redirect(route('itemClass.index'));
    }
}
