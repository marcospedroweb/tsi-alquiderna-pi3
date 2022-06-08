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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da classe de item</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itemClasses as $itemClass)
                <tr>
                    <td>{{ $itemClass->id }}</td>
                    <td>{{ $itemClass->name }}</td>
                    <td><a href="{{ route('itemClass.edit', $itemClass->id) }}" class="btn btn-primary">Editar</a></td>
                    <td><a href="{{ route('itemClass.destroy', $itemClass->id) }}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
