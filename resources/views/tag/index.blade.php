@extends('layouts.app')

@section('content')
    <div class="mt-3">
        <a href="{{ route('tag.create') }}" class="btn btn-success">Criar tag</a>
    </div>
    <table class="table table-striped" class="mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da tag</th>
                <th>Quantidades de produtos</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->Products->count() }}</td>
                    <td>
                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('tag.destroy', $tag->id) }}" class="btn btn-danger">Apagar</a>
                    </td>
                    <!--Função de apagar a aquele produto-->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
