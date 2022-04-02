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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Imagem</th>
                <th scope="col">PosX</th>
                <th scope="col">PosY</th>
                <th scope="col">Nome do autor</th>
                <th scope="col">link do autor</th>
                <th scope="col">Site</th>
                <th scope="col">link do post</th>
                <th scope="col">Nivel minimo</th>
                <th scope="col">Nivel maximo</th>
                <th scope="col">Encantar</th>
                <th scope="col">Vida</th>
                <th scope="col">Velocidade</th>
                <th scope="col">Proteção fisica</th>
                <th scope="col">Proteção magica</th>
                <th scope="col">Ataque fisico</th>
                <th scope="col">Ataque magico</th>
                <th scope="col">Mana</th>
                <th scope="col">Promoção</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Classe</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->imagePosX }}</td>
                    <td>{{ $product->imagePosY }}</td>
                    <td>{{ $product->author_name }}</td>
                    <td>{{ $product->author_link }}</td>
                    <td>
                        @foreach ($product->SourceWebsite()->get() as $sourceWebsite)
                            {{ $sourceWebsite->name }}
                        @endforeach
                    </td>
                    <td>{{ $product->source_website_link }}</td>
                    <td>{{ $product->lvlMin }}</td>
                    <td>{{ $product->lvlMax }}</td>
                    <td>{{ $product->enchant }}</td>
                    <td>{{ $product->life }}</td>
                    <td>{{ $product->speed }}</td>
                    <td>{{ $product->physical_protection }}</td>
                    <td>{{ $product->magic_protection }}</td>
                    <td>{{ $product->physical_attack }}</td>
                    <td>{{ $product->physical_magic }}</td>
                    <td>{{ $product->mana }}</td>
                    <td>{{ $product->sale }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @foreach ($product->Category()->get() as $category)
                            {{ $category->name }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($product->ItemClass()->get() as $itemClass)
                            {{ $itemClass->name }}
                        @endforeach
                    </td>
                    <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Editar</a></td>
                    <td><a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
