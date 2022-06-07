@extends('layouts.app')
@section('content')
    <div class="container-xxl">
        <section class="mt-5">
            <h2 class="h2">{{ count($products) }} Resultados com "{{ $search_name }}"</h2>
        </section>
        <div class="separator-products rounded"></div>
        <section class="products-search row flex-column align-items-center mb-6">
            @foreach ($products as $product)
                <div class="product-found col-10 mb-3 p-3 rounded border bg-white">
                    <div class="row justify-content-center align-items-center">
                        <a href="{{ route('product.show', $product->id) }}"
                            class="product-image col-4 p-0 position-relative overflow-hidden rounded">
                            <img src="{{ asset($product->image) }}" class="rounded" alt="imagem do produto">
                            <div class="attributes d-flex justify-content-between align-items-center">
                                @if ($product->Category->name === 'Armadura')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $product->life }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $product->speed }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-shield-slash-fill"></i>
                                        <span
                                            class="product-attribute-physical-protection">{{ $product->physical_protection }}</span>
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
                                        <span
                                            class="product-attribute-magic-protection">{{ $product->magic_protection }}</span>
                                    </div>
                                @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'vida')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $product->life }}</span>
                                    </div>
                                @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'força')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-shield-slash-fill"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $product->physical_attack }}</span>
                                    </div>
                                @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'mana')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $product->mana }}</span>
                                    </div>
                                @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'agilidade')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $product->speed }}</span>
                                    </div>
                                @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'kit')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $product->life }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $product->speed }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $product->mana }}</span>
                                    </div>
                                @else
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user-slash"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $product->physical_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-wand-sparkles"></i>
                                        <span class="product-attribute-magic-attack">{{ $product->magic_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $product->mana }}</span>
                                    </div>
                                @endif
                            </div>
                        </a>
                        <a href="{{ route('product.show', $product->id) }}"
                            class="product-found-text d-block col-6 row flex-column justify-content-center text-decoration-none ms-3">
                            <div class="col-12">
                                <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                    @if ($product->new === 1)
                                        <span class="novidade">novo</span>
                                    @endif
                                    <span class="product-name">{{ $product->name }}</span>
                                </h3>
                                <p class="category-item-class"><span
                                        class="product-category">{{ $product->Category->name }}</span>
                                    <span class="product-item-class">{{ $product->ItemClass->name }}</span>,
                                    nível
                                    <span class="product-level">{{ $product->lvlMin }}</span>
                                </p>
                                <p class="description">{{ $product->description }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center mt-4">
                                <div>
                                    @if ($product->discount_price !== 0.0)
                                        <p class="text-decoration-line-through product-discount-price m-0">R$
                                            <span class="product-price">{{ $product->price }}</span>
                                        </p>
                                        <p class="p-product-price m-0">R$ <span
                                                class="product-discount-price">{{ $product->discount_price }}
                                            </span>
                                        </p>
                                    @else
                                        <p class="p-product-price m-0">R$ <span
                                                class="product-price">{{ $product->price }}</span>
                                        </p>
                                    @endif
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary ms-2">Ver
                                        produto</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
