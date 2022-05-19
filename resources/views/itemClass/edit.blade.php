@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Classe de item</h2>
        <div>
            <a href="{{ route('itemClass.index') }}" class="btn btn-primary">Listar classes de items</a>
            <a href="{{ route('itemClass.create') }}" class="btn btn-primary active">Criar classe de item</a>
            <a href="{{ route('itemClass.trash') }}" class="btn btn-primary">Lixeira classe de item</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <form action="{{ route('itemClass.update', $itemClass->id) }}" class="row justify-content-center align-items-center"
        method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center mb-3">Criando classe de item</h3>
        <div class="col-4 form-floating mb-3">
            <input type="text" class="form-control" value="{{ $itemClass->name }}" name="name">
            <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome da classe de item</label>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
