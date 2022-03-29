@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Site fonte</h2>
        <div>
            <a href="{{ route('sourceWebsite.index') }}" class="btn btn-primary">Listar site fontes</a>
            <a href="{{ route('sourceWebsite.create') }}" class="btn btn-primary active">Criar site fonte</a>
            <a href="{{ route('sourceWebsite.trash') }}" class="btn btn-primary">Lixeira site fonte</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <div class="container-xxl">
        <h2>Criar site fonte</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome da site fonte</th>
                    <th scope="col">Restaurar</th>
                    <th scope="col">Apagar completamente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sourceWebsites as $sourceWebsite)
                    <tr>
                        <td>{{ $sourceWebsite->id }}</td>
                        <td>{{ $sourceWebsite->name }}</td>
                        <td><a href="{{ route('sourceWebsite.edit', $sourceWebsite->id) }}"
                                class="btn btn-primary">Editar</a>
                        </td>
                        <td><a href="{{ route('sourceWebsite.restore', $sourceWebsite->id) }}"
                                class="btn btn-danger">Restaurar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
