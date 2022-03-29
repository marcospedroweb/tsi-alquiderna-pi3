<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ItemClass;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('itemClass.index')->with('itemClasses', ItemClass::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemClass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ItemClass::create($request->all());//Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa
        session()->flash('success', 'Classe de item criada com sucesso');
        return redirect(route('itemClass.index'));
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
    public function edit(ItemClass $itemClass)
    {
        // Leva a ItemClass para pagina para editar
        return view('itemClass.edit')->with('itemClasses', $itemClass);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemClass $itemClass, Request $request)
    {
        // Leva a ItemClass para pagina para edit
        // [ItemClass $itemClass] é a ItemClass que deve ser atualizada
        // [Request $request] Recebe todos os dados que irão substituir a $itemClass
        $itemClass->update($request->all());
        session()->flash('success', 'Classe de item editada com sucesso');
        return redirect(route('itemClass.index'));// para onde ta voltando
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemClass $itemClass)
    {
        $itemClass->delete();
        session()->flash('success', 'Classe de item apagada com sucesso');
        return redirect(route('itemClass.index'));
    }

    public function trash(){
        return view('itemClass.trash')->with('itemClasses', ItemClass::onlyTrashed()->get());// Retorna todos os elementos com soft delete
    }

    public function restore($itemClass_id){
        // Recebe como parametro o id que deseja ser restaurado
        $itemClass = ItemClass::onlyTrashed()->where('id', $itemClass_id)->first(); // Retorna o id daquela linha "apagada"
        $itemClass->restore(); // Restaura aquela linha
        session()->flash('success', 'Classe de item restaurada com sucesso');
        return redirect(route('itemClass.index'));
    }
}
