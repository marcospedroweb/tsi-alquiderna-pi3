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
                <th>Restaurar</th>
                <th>Apagar permanentemente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('tag.restore', $tag->id) }}" class="btn btn-primary">Restaurar</a>
                    </td>
                    <td>
                        <a href="{{ route('tag.forceDelete', $tag->id) }}" class="btn btn-danger">Apagar
                            permanentemente</a>
                    </td>
                    <!--Função de apagar a aquele produto-->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
