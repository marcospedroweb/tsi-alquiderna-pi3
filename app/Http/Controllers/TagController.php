<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        //Retorna todos os dados da tabela tag para a view especificada
        return view('tag.index')->with('tags', Tag::all());
        // [with('nomeVariavel', nomeTabela::all());] retorna todas as linhas do banco
    }

    public function create(){
        return view('tag.create'); // Retorna o html para adicionar o produto no banco
    }

    public function store(Request $request){
        Tag::create($request->all());//Recebe os dados do forulario e cria uma linha no banco com os dados, recebe tudo mas ele so pega o que precisa
        session()->flash('success', 'Tag criada com sucesso');//[session()->flash()] consiste em uma flash message, mostra a mensagem para o usuario rapidamente, depois apaga isso da memoria
        return redirect(route('tag.index'));//Retorna, mudando para a rota, ou seja, a pagina especificada
    }

    public function destroy(tag $tag){
        $tag->delete();
        session()->flash('success', 'Tag deletada com sucesso');//[session()->flash()] consiste em uma flash message, mostra a mensagem para o usuario rapidamente, depois apaga isso da memoria
        return redirect(route('tag.index'));
    }

    public function edit(tag $tag){
        return view('tag.edit')->with('tag', $tag);
    }

    public function update(tag $tag, Request $request){
        // [tag $tag, Request $request] recebe o produto e a tabela com os dados
        $tag->update($request->all());
        session()->flash('success', "Tag ($tag->name) editada com sucesso!");
        return redirect(route('tag.index'));// para onde ta voltando
    }

    public function trash(){
        //Leva para as linha "apagadas"
        return view('tag.trash')->with('tags', Tag::onlyTrashed()->get());
        // [::onlyTrashed()->get()] mostra apenas as linhas com "deleted_at"
    }

    public function restore($tag_id){
        // Recebe como parametro o id que deseja ser restaurado
        $tag = tag::onlyTrashed()->where('id', $tag_id)->first(); // Retorna o id daquela linha "apagada"
        $tag->restore(); // Restaura aquela linha
        session()->flash('success', 'Tag restaurada com sucesso!');
        return redirect(route('tag.index'));// para onde ta voltando
    }

    public function forceDelete($tag_id){
        // Para deletar permanentemente, o find comum não encontrará esse id já que ele está "excluido"
        // Para buscarmos esse id no banco é necessario utilizar o [tag::onlyTrashed()] que retornará todos as tags "deletadas"
        // Depois utilizar o [->where('colunaDesejada', $variavelComOValor)->first()], para encontrar aquela coluna (geralmente id), passando a variavel com o valor que é igual a da coluna e [first()] que retornará o primeiro resultado que ele encontrar
        $tag = tag::onlyTrashed()->where('id', $tag_id)->first();
        $tag->forceDelete(); // Apaga totalmente aquele dado
        session()->flash('success', 'Tag deletada PERMANENTEMENTE com sucesso');//[session()->flash()] consiste em uma flash message, mostra a mensagem para o usuario rapidamente, depois apaga isso da memoria
        return redirect(route('tag.index'));
    }
}
