@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Crud geral</h2>
        <div>
            <a href="{{ route('category.index') }}" class="btn btn-primary">Categorias</a>
            <a href="{{ route('itemClass.index') }}" class="btn btn-primary">Classes</a>
            <a href="{{ route('sourceWebsite.index') }}" class="btn btn-primary">Site fontes</a>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Produtos</a>
        </div>
    </div>
@endsection
