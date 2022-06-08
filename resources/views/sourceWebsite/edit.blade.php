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
    <form action="{{ route('sourceWebsite.update', $sourceWebsite->id) }}"
        class="row justify-content-center align-items-center" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center mb-3">Criando site fonte</h3>
        <div class="col-4 form-floating mb-3">
            <input type="text" class="form-control" value="{{ $sourceWebsite->name }}" name="name">
            <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome da site fonte</label>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
