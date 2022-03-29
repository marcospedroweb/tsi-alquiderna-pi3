<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SourceWebsite;

class SourceWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sourceWebsite.index')->with('sourceWebsites', SourceWebsite::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sourceWebsite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SourceWebsite::create($request->all());//Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa
        session()->flash('success', 'SourceWebsite criada com sucesso');
        return redirect(route('sourceWebsite.index'));
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
    public function edit($id)
    {
        // Leva a SourceWebsite para pagina para edit
        return view('sourceWebsite.edit')->with('sourceWebsites', $sourceWebsite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Leva a SourceWebsite para pagina para edit
        // [SourceWebsite $SourceWebsite] é a SourceWebsite que deve ser atualizada
        // [Request $request] Recebe todos os dados que irão substituir a $SourceWebsite
        $SourceWebsite->update($request->all());
        session()->flash('success', 'SourceWebsite editada com sucesso');
        return redirect(route('sourceWebsite.index'));// para onde ta voltando
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SourceWebsite->delete();
        session()->flash('success', 'SourceWebsite apagada com sucesso');
        return redirect(route('sourceWebsite.index'));
    }

    public function trash() {
        return view('sourceWebsite.trash')->with('sourceWebsites', SourceWebsite::onlyTrashed()->get());// Retorna todos os elementos com soft delete
    }

    public function restore() {
        // Recebe como parametro o id que deseja ser restaurado
        $sourceWebsite = SourceWebsite::onlyTrashed()->where('id', $sourceWebsites_id)->first(); // Retorna o id daquela linha "apagada"
        $sourceWebsite->restore(); // Restaura aquela linha
        session()->flash('success', 'SourceWebsite restaurada com sucesso');
        return redirect(route('sourceWebsite.index'));
    }
}
