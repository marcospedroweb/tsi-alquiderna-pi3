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
    <div class="row justify-content-center align-items-center">
        <div class="col-2">
            <div class="card-product position-relative overflow-hidden">
                <img src="{{ asset('imgs/products/49aef0bf7869efa1edeaabe49dcf94f1.jpg') }}" class="img-fluid">
                <div
                    class="card-product-text w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column">
                    <div class="d-flex flex-column">
                        <h3>Produto nome</h3>
                        <p>Armadura media, nivel 31</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="attributes d-flex justify-content-between align-items-center">
                            <div class="attribute d-flex justify-content-center align-items-center">
                                <i class="bi bi-heart-fill"></i>
                                <span>600</span>
                            </div>
                            <div class="attribute d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-person-running"></i>
                                <span>600</span>
                            </div>
                            <div class="attribute d-flex justify-content-center align-items-center">
                                <i class="bi bi-shield-slash-fill"></i>
                                <span>600</span>
                            </div>
                            <div class="attribute d-flex justify-content-center align-items-center">
                                <svg class="shield-moon" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 0L0 3V9.09C0 14.14 3.41 18.85 8 20C12.59 18.85 16 14.14 16 9.09V3L8 0ZM14 9.09C14 13.09 11.45 16.79 8 17.92C4.55 16.79 2 13.1 2 9.09V4.39L8 2.14L14 4.39V9.09Z"
                                        fill="#771CA3" />
                                    <path
                                        d="M5.01007 12.33C6.76007 14.5 10.1301 14.57 11.9701 12.4C12.2001 12.13 12.0501 11.72 11.7101 11.66C10.4201 11.45 9.23007 10.68 8.53007 9.46003C7.82007 8.24003 7.75007 6.83003 8.21007 5.60003C8.33007 5.27003 8.05006 4.94003 7.70006 5.00003C4.36006 5.62003 2.81007 9.61003 5.01007 12.33Z"
                                        fill="#771CA3" />
                                </svg>
                                <span>600</span>
                            </div>
                        </div>
                        <div class="card-product-price">
                            <p>R$ 6999</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class=" col-10">

            <span>Photo tirada por <a href="#">Fulano</a> em SITE</span>
            <div>
                <span>Nivel minimo: 31</span>
                <span>Nivel maximo: 60</span>
                <span>Encantar: Não</span>
                <span>Promoção: Não</span>
                <span>Vida: 600</span>
                <span>Velocidade: 600</span>
                <span>PF: 600</span>
                <span>PM: 600</span>
            </div>
        </div> --}}
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
