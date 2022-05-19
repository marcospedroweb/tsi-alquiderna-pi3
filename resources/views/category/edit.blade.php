@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Categoria</h2>
        <div>
            <a href="{{ route('category.index') }}" class="btn btn-primary">Listar categorias</a>
            <a href="{{ route('category.create') }}" class="btn btn-primary active">Criar categoria</a>
            <a href="{{ route('category.trash') }}" class="btn btn-primary">Lixeira categoria</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <form action="{{ route('category.update', $category->id) }}" class="row justify-content-center align-items-center"
        method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center mb-3">Editando categoria</h3>
        <div class="col-4 form-floating mb-3">
            <input type="text" class="form-control" value="{{ $category->name }}" name="name">
            <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome da categoria</label>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
