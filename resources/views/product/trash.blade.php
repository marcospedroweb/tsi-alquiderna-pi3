@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Produto</h2>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Listar produtos</a>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Criar produto</a>
            <a href="{{ route('product.trash') }}" class="btn btn-primary active">Lixeira produto</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <div class="row justify-content-between align-items-center mb-6">
        @foreach ($products as $product)
            <div class="col col-lg-4 row bg-secondary p-3 flex-column justify-content-center align-items-center">
                <div class="col justify-content-center align-items-center">
                    <div class="card-product-view position-relative overflow-hidden mx-auto mb-3">
                        <img src='{{ asset("$product->image") }}' class="img-fluid">
                        <div
                            class="card-product-view-text w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column">
                            <div class="d-flex flex-column">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->Category->name }} {{ $product->ItemClass->name }}, nível
                                    {{ $product->lvlMin }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="attributes d-flex justify-content-between align-items-center">
                                    @if ($product->Category->name === 'Armadura')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $product->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $product->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span>{{ $product->physical_protection }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <svg class="shield-moon" width="16" height="20" viewBox="0 0 16 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0L0 3V9.09C0 14.14 3.41 18.85 8 20C12.59 18.85 16 14.14 16 9.09V3L8 0ZM14 9.09C14 13.09 11.45 16.79 8 17.92C4.55 16.79 2 13.1 2 9.09V4.39L8 2.14L14 4.39V9.09Z"
                                                    fill="#771CA3" />
                                                <path
                                                    d="M5.01007 12.33C6.76007 14.5 10.1301 14.57 11.9701 12.4C12.2001 12.13 12.0501 11.72 11.7101 11.66C10.4201 11.45 9.23007 10.68 8.53007 9.46003C7.82007 8.24003 7.75007 6.83003 8.21007 5.60003C8.33007 5.27003 8.05006 4.94003 7.70006 5.00003C4.36006 5.62003 2.81007 9.61003 5.01007 12.33Z"
                                                    fill="#771CA3" />
                                            </svg>
                                            <span>{{ $product->magic_protection }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-product-view-price">
                                    <p>R$ {{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-product-info col justify-content-center align-items-center">
                    <h3 class="h3 mb-3 fw-bold text-center">Photo tirada por <a
                            href="{{ $product->author_link }}">{{ $product->author_name }}</a> em <a
                            href="{{ $product->source_website_link }}">{{ $product->SourceWebsite->name }}</a>
                    </h3>
                    <p>{{ $product->recommendation }}</p>
                    <div>
                        <div class="d-flex mb-3">
                            <div class="product-info d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <span class="fw-bold">Nível minimo</span>
                                </div>
                                <span>{{ $product->lvlMin }}</span>
                            </div>
                            <div class="product-info d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <span class="fw-bold">Nível maximo</span>
                                </div>
                                <span>{{ $product->lvlMax }}</span>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="product-info d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <span class="fw-bold">Encantamento</span>
                                </div>
                                @if ($product->enchant === 0)
                                    <span>Não</span>
                                @else
                                    <span>Sim</span>
                                @endif
                            </div>
                            <div class="product-info d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <span class="fw-bold">Promoção</span>
                                </div>
                                @if ($product->sale === 0)
                                    <span>Não</span>
                                @else
                                    <span>Sim</span>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <a href="{{ route('product.restore', $product->id) }}"
                                class="btn btn-lg btn-primary me-4">Restaurar</a>
                            <a href="{{ route('product.forceDelete', $product->id) }}"
                                class="btn btn-lg btn-danger">Apagar permanente</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
