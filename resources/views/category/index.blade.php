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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da categoria</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Editar</a></td>
                    <td><a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
