@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Produto</h2>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Listar produtos</a>
            <a href="{{ route('product.create') }}" class="btn btn-primary active">Criar produto</a>
            <a href="{{ route('product.trash') }}" class="btn btn-primary">Lixeira produto</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <form action="{{ route('product.store') }}" class="row justify-content-center align-items-center" method="POST">
        @csrf
        <h3 class="text-center mb-3">Criando produto</h3>
        <div class="col-8 mb-3">
            <div class="form-floating mb-3">
                <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome do produto</label>
                <input type="text" class="form-control" placeholder="produto" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem do produto</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="form-floating mb-3">
                <label for="imagePosX" style="margin-left: 12px; border: 0;">Pos X da imagem</label>
                <input type="number" class="form-control" placeholder="produto" name="imagePosX" id="imagePosX">
            </div>
            <div class="form-floating mb-3">
                <label for="imagePosY" style="margin-left: 12px; border: 0;">Pos Y da imagem</label>
                <input type="number" class="form-control" placeholder="produto" name="imagePosY" id="imagePosY">
            </div>
            <div class="form-floating mb-3">
                <label for="author_name" style="margin-left: 12px; border: 0;">Nome do author</label>
                <input type="text" class="form-control" placeholder="produto" name="author_name" id="author_name">
            </div>
            <div class="form-floating mb-3">
                <label for="author_link" style="margin-left: 12px; border: 0;">Link do author</label>
                <input type="text" class="form-control" placeholder="produto" name="author_link" id="author_link">
            </div>
            <div class="form-floating mb-3">
                <label for="source_website_link" style="margin-left: 12px; border: 0;">Link da imagem</label>
                <input type="text" class="form-control" placeholder="produto" name="source_website_link"
                    id="source_website_link">
            </div>
            <div class="form-floating mb-3">
                <label for="lvlMin" style="margin-left: 12px; border: 0;">Nivel minimo</label>
                <input type="number" class="form-control" placeholder="produto" name="lvlMin" id="lvlMin">
            </div>
            <div class="form-floating mb-3">
                <label for="lvlMax" style="margin-left: 12px; border: 0;">Nivel maximo</label>
                <input type="number" class="form-control" placeholder="produto" name="lvlMax" id="lvlMax">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Produto é encantavel?</option>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <div class="form-floating mb-3">
                <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome da produto</label>
                <input type="text" class="form-control" placeholder="produto" name="name">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingInput" style="margin-left: 12px; border: 0;">Nome da produto</label>
                <input type="text" class="form-control" placeholder="produto" name="name">
            </div>
            <div class="form-floating mb-3">
                <label for="description">Descrição do produto</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px"
                    name="description"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
