@extends('layouts.app')
@section('content')
    <section class="mt-5 mb-6">
        <div class="item-class-options d-flex justify-content-center align-items-center">
            @if ($category_name === 'Armadura')
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'leve']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Armadura-leve.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Armaduras leve
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justif-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'média']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Armadura-média.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Armaduras média
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justif-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'pesada']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Armadura-pesada.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Armaduras pesada
                        </span>
                    </a>
                </div>
            @elseif($category_name === 'Arma física')
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'espada']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Arma física-espada.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Espadas
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'machado']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Arma física-machado.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Machados
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'arco']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Arcos
                        </span>
                    </a>
                </div>
            @elseif($category_name === 'Arma mágica')
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Arma mágica', 'itemClass' => 'varinha']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Arma mágica-varinha.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Varinhas
                        </span>
                    </a>
                </div>
            @elseif($category_name === 'Poção')
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'vida']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Poção-vida.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Poção de vida
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'mana']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Poção-mana.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Poção de mana
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'força']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Poção-força.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Poção de força
                        </span>
                    </a>
                </div>
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'agilidade']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Poção-agilidade.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Poção de agilidade
                        </span>
                    </a>
                </div>
            @else
                <div class="option-item-class d-flex flex-column justify-content-center align-items-center text-center">
                    <a href="{{ route('product.itemClass', ['category' => 'Grimório', 'itemClass' => 'mágico']) }}">
                        <div class="div-item-class-image overflow-hidden">
                            <img src="{{ asset('images-for-cards/image-for-cards-Grimório-mágico.png') }}"
                                class="img-fluid" alt="">
                        </div>
                        <span>
                            Mágicos
                        </span>
                    </a>
                </div>
            @endif
        </div>
    </section>
    <section class="mb-6">
        <img src="https://via.placeholder.com/1296x624.png" alt="" class="mb-4">
        <div class="d-flex">
            <img src="https://via.placeholder.com/636x624.png" alt="" class="me-4">
            <img src="https://via.placeholder.com/636x624.png" alt="">
        </div>
        <img src="https://via.placeholder.com/1296x624.png" alt="" class="mt-4">
    </section>
    <section class="mb-6">
        <h2 class="mb-3 h2">Novidades de {{ $category_name }}s</h2>
        <div id="productCarouselNews" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($newProductsByCategory as $newProduct)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.index') }}">
                            <img src='{{ asset("$newProduct->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($newProduct->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $newProduct->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $newProduct->Category->name }}</span>
                                        <span class="product-item-class">{{ $newProduct->ItemClass->name }}</span>, nível
                                        <span class="product-level">{{ $newProduct->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        @if ($newProduct->Category->name === 'Armadura')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $newProduct->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $newProduct->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $newProduct->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $newProduct->magic_protection }}</span>
                                            </div>
                                        @elseif($newProduct->Category->name === 'Poção' && $newProduct->ItemClass->name === 'vida')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $newProduct->life }}</span>
                                            </div>
                                        @elseif($newProduct->Category->name === 'Poção' && $newProduct->ItemClass->name === 'força')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $newProduct->physical_attack }}</span>
                                            </div>
                                        @elseif($newProduct->Category->name === 'Poção' && $newProduct->ItemClass->name === 'mana')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $newProduct->mana }}</span>
                                            </div>
                                        @elseif($newProduct->Category->name === 'Poção' && $newProduct->ItemClass->name === 'agilidade')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $newProduct->speed }}</span>
                                            </div>
                                        @elseif($newProduct->Category->name === 'Poção' && $newProduct->ItemClass->name === 'kit')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $newProduct->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $newProduct->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $newProduct->mana }}</span>
                                            </div>
                                        @else
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $newProduct->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $newProduct->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $newProduct->mana }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($newProduct->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$ <span
                                                        class="product-price">{{ $newProduct->price }}</span></p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $newProduct->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $newProduct->price }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @if ($category_name === 'Armadura')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-leve.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">armaduras leves</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-média.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">armaduras
                                        médias</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-pesada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">armaduras
                                        pesadas</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma física')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-espada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">espadas</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-machado.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">machados</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">arcos</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma mágica')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma mágica-varinha.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">varinha</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Poção')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-vida.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">poções de
                                        vida</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-mana.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">poções de
                                        mana</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-força.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">poções de
                                        força</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-agilidade.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">poções de
                                        agilidade</span></span>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Grimório-mágico.png') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais novidades de <span
                                        class="fw-bold">grimórios</span></span>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($newProductsByCategory) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2 class="mb-3 h2">{{ $category_name }}s em promoção</h2>
        <div id="productCarouselonSale" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsOnSaleByCategory as $productsOnSale)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.index') }}">
                            <img src='{{ asset("$productsOnSale->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productsOnSale->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productsOnSale->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productsOnSale->Category->name }}</span>
                                        <span class="product-item-class">{{ $productsOnSale->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productsOnSale->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        @if ($productsOnSale->Category->name === 'Armadura')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $productsOnSale->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $productsOnSale->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $productsOnSale->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $productsOnSale->magic_protection }}</span>
                                            </div>
                                        @elseif($productsOnSale->Category->name === 'Poção' && $productsOnSale->ItemClass->name === 'vida')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $productsOnSale->life }}</span>
                                            </div>
                                        @elseif($productsOnSale->Category->name === 'Poção' && $productsOnSale->ItemClass->name === 'força')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $productsOnSale->physical_attack }}</span>
                                            </div>
                                        @elseif($productsOnSale->Category->name === 'Poção' && $productsOnSale->ItemClass->name === 'mana')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $productsOnSale->mana }}</span>
                                            </div>
                                        @elseif($productsOnSale->Category->name === 'Poção' && $productsOnSale->ItemClass->name === 'agilidade')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $productsOnSale->speed }}</span>
                                            </div>
                                        @elseif($productsOnSale->Category->name === 'Poção' && $productsOnSale->ItemClass->name === 'kit')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $productsOnSale->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $productsOnSale->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $productsOnSale->mana }}</span>
                                            </div>
                                        @else
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $productsOnSale->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $productsOnSale->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $productsOnSale->mana }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productsOnSale->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$ <span
                                                        class="product-price">{{ $productsOnSale->price }}</span></p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productsOnSale->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productsOnSale->price }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @if ($category_name === 'Armadura')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-leve.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        leves em promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-média.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        médias em promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-pesada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        pesadas em promoção</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma física')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-espada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">espadas em
                                        promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-machado.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">machados em
                                        promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">arcos em
                                        promoção</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma mágica')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma mágica-varinha.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">varinha em
                                        promoção</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Poção')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-vida.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        vida em promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-mana.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        mana em promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-força.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        força em promoção</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-agilidade.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        agilidade em promoção</span></span>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Grimório-mágico.png') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">grimórios em
                                        promoção</span></span>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productCarouselonSale"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon  {{ count($productsOnSaleByCategory) < 3 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselonSale"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2 class="mb-3 h2">{{ $category_name }}s para iniciantes</h2>
        <div id="productCarouselForBeginners" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($beginnerProductsByCategory as $begginerProduct)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.index') }}">
                            <img src='{{ asset("$begginerProduct->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($begginerProduct->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $begginerProduct->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $begginerProduct->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $begginerProduct->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $begginerProduct->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        @if ($begginerProduct->Category->name === 'Armadura')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span
                                                    class="product-attribute-life">{{ $begginerProduct->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $begginerProduct->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $begginerProduct->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $begginerProduct->magic_protection }}</span>
                                            </div>
                                        @elseif($begginerProduct->Category->name === 'Poção' && $begginerProduct->ItemClass->name === 'vida')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span
                                                    class="product-attribute-life">{{ $begginerProduct->life }}</span>
                                            </div>
                                        @elseif($begginerProduct->Category->name === 'Poção' && $begginerProduct->ItemClass->name === 'força')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $begginerProduct->physical_attack }}</span>
                                            </div>
                                        @elseif($begginerProduct->Category->name === 'Poção' && $begginerProduct->ItemClass->name === 'mana')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span
                                                    class="product-attribute-mana">{{ $begginerProduct->mana }}</span>
                                            </div>
                                        @elseif($begginerProduct->Category->name === 'Poção' && $begginerProduct->ItemClass->name === 'agilidade')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $begginerProduct->speed }}</span>
                                            </div>
                                        @elseif($begginerProduct->Category->name === 'Poção' && $begginerProduct->ItemClass->name === 'kit')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span
                                                    class="product-attribute-life">{{ $begginerProduct->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span
                                                    class="product-attribute-speed">{{ $begginerProduct->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span
                                                    class="product-attribute-mana">{{ $begginerProduct->mana }}</span>
                                            </div>
                                        @else
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $begginerProduct->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $begginerProduct->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span
                                                    class="product-attribute-mana">{{ $begginerProduct->mana }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($begginerProduct->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$ <span
                                                        class="product-price">{{ $begginerProduct->price }}</span></p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $begginerProduct->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $begginerProduct->price }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @if ($category_name === 'Armadura')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-leve.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        leves para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-média.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        médias para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-pesada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais<span class="fw-bold d-block">armaduras
                                        pesadas para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma física')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-espada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">espadas para
                                        iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-machado.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">machados para
                                        iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">arcos para
                                        iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Arma mágica')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma mágica-varinha.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">varinhas para
                                        iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                @elseif ($category_name === 'Poção')
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-vida.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        vida para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-mana.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        mana para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-força.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        força para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-agilidade.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">poções de
                                        agilidade para iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Grimório-mágico.png') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">grimórios
                                        para
                                        iniciantes</span></span>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productCarouselForBeginners"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($beginnerProductsByCategory) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselForBeginners"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    @if ($category_name === 'Armadura')
        <section class="mb-6">
            <h2 class="mb-3 h2">Armaduras leves</h2>
            <div id="productCarouselLightArmors" data-translate-value='0' data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['lightArmors'] as $lightArmor)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$lightArmor->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($lightArmor->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $lightArmor->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $lightArmor->Category->name }}</span>
                                            <span class="product-item-class">{{ $lightArmor->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $lightArmor->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $lightArmor->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $lightArmor->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $lightArmor->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $lightArmor->magic_protection }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($lightArmor->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $lightArmor->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $lightArmor->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $lightArmor->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-leve.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        leves</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselLightArmors"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['lightArmors']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselLightArmors"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Armaduras médias</h2>
            <div id="productCarouselMediumArmors" data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['mediumArmors'] as $mediumArmor)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$mediumArmor->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($mediumArmor->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $mediumArmor->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $mediumArmor->Category->name }}</span>
                                            <span
                                                class="product-item-class">{{ $mediumArmor->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $mediumArmor->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $mediumArmor->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $mediumArmor->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $mediumArmor->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $mediumArmor->magic_protection }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($mediumArmor->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $mediumArmor->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $mediumArmor->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $mediumArmor->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-média.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        médias</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselMediumArmors"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['mediumArmors']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselMediumArmors"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Armaduras pesadas</h2>
            <div id="productCarouselHeavyArmors" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['heavyArmors'] as $heavyArmor)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$heavyArmor->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($heavyArmor->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $heavyArmor->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $heavyArmor->Category->name }}</span>
                                            <span class="product-item-class">{{ $heavyArmor->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $heavyArmor->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-protection">{{ $heavyArmor->physical_protection }}</span>
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
                                                <span
                                                    class="product-attribute-magic-protection">{{ $heavyArmor->magic_protection }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($heavyArmor->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $heavyArmor->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $heavyArmor->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $heavyArmor->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Armadura-pesada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">armaduras
                                        pesadas</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselHeavyArmors"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['heavyArmors']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselHeavyArmors"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    @elseif ($category_name === 'Arma física')
        <section class="mb-6">
            <h2 class="mb-3 h2">Espadas</h2>
            <div id="productCarouselSwords" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['swords'] as $sword)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$sword->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($sword->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $sword->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $sword->Category->name }}</span>
                                            <span class="product-item-class">{{ $sword->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $sword->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $sword->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $sword->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $sword->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($sword->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $sword->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $sword->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $sword->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-espada.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span
                                        class="fw-bold">espadas</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselSwords"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['swords']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselSwords"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Machados</h2>
            <div id="productCarouselAxes" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['axes'] as $axe)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$axe->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($axe->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $axe->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $axe->Category->name }}</span>
                                            <span class="product-item-class">{{ $axe->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $axe->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $axe->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $axe->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $axe->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($axe->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $axe->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $axe->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $axe->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-machado.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span
                                        class="fw-bold">machados</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselAxes"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['axes']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselAxes"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Arcos</h2>
            <div id="productCarouselBows" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['bows'] as $bow)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$bow->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($bow->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $bow->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $bow->Category->name }}</span>
                                            <span class="product-item-class">{{ $bow->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $bow->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $bow->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $bow->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $bow->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($bow->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $bow->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $bow->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $bow->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span
                                        class="fw-bold">arcos</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselBows"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['bows']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselBows"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    @elseif ($category_name === 'Arma mágica')
        <section class="mb-6">
            <h2 class="mb-3 h2">Varinhas</h2>
            <div id="productCarouselWands" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['wands'] as $wand)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$wand->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($wand->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $wand->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $wand->Category->name }}</span>
                                            <span class="product-item-class">{{ $wand->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $wand->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $wand->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $wand->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $wand->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($wand->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$ <span
                                                            class="product-price">{{ $wand->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $wand->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $wand->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Arma mágica-varinha.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span
                                        class="fw-bold">varinhas</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselWands"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['wands']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselWands"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    @elseif ($category_name === 'Poção')
        <section class="mb-6">
            <h2 class="mb-3 h2">Poções de vida</h2>
            <div id="productCarouselPotionOfLife" data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['potion-life'] as $potionLife)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$potionLife->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($potionLife->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $potionLife->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $potionLife->Category->name }}</span>
                                            <span class="product-item-class">{{ $potionLife->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $potionLife->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $potionLife->life }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($potionLife->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$
                                                        <span class="product-price">{{ $potionLife->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $potionLife->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $potionLife->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-vida.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">Poções de
                                        vida</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselPotionOfLife"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['potion-life']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselPotionOfLife"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Poções de mana</h2>
            <div id="productCarouselPotionOfMana" data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['potion-mana'] as $potionMana)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$potionMana->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($potionMana->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $potionMana->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $potionMana->Category->name }}</span>
                                            <span class="product-item-class">{{ $potionMana->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $potionMana->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $potionMana->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($potionMana->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$
                                                        <span class="product-price">{{ $potionMana->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $potionMana->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $potionMana->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-mana.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">Poções de
                                        mana</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselPotionOfMana"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['potion-mana']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselPotionOfMana"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Poções de força</h2>
            <div id="productCarouselPotionOfStrength" data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['potion-strength'] as $potionStrength)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$potionStrength->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($potionStrength->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $potionStrength->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $potionStrength->Category->name }}</span>
                                            <span
                                                class="product-item-class">{{ $potionStrength->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $potionStrength->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $potionStrength->physical_attack }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($potionStrength->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$
                                                        <span
                                                            class="product-price">{{ $potionStrength->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $potionStrength->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $potionStrength->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-força.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">Poções de
                                        força</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselPotionOfStrength"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['potion-strength']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselPotionOfStrength"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="mb-3 h2">Poções de agilidade</h2>
            <div id="productCarouselPotionOfSpeed" data-translate-value='0'
                class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['potion-speed'] as $potionSpeed)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$potionSpeed->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($potionSpeed->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $potionSpeed->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $potionSpeed->Category->name }}</span>
                                            <span
                                                class="product-item-class">{{ $potionSpeed->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $potionSpeed->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $potionSpeed->speed }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($potionSpeed->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$
                                                        <span class="product-price">{{ $potionSpeed->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $potionSpeed->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $potionSpeed->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Poção-agilidade.jpg') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold d-block">Poções de
                                        agilidade</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselPotionOfSpeed"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['potion-speed']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselPotionOfSpeed"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    @else
        <section class="mb-6">
            <h2 class="mb-3 h2">Grimórios</h2>
            <div id="productCarouselGrimoire" data-translate-value='0' class="carousel-products position-relative mb-6">
                <div class="carousel-products-inner d-flex justify-content-start overflow-hidden"
                    data-carousel-show-card="4">
                    @foreach ($productsByItemClass['grimoire-magic'] as $grimoire)
                        <div class="card-product position-relative overflow-hidden">
                            <a href="{{ route('product.index') }}">
                                <img src='{{ asset("$grimoire->image") }}' class="img-fluid">
                                <div
                                    class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                    <div class="d-flex flex-column">
                                        <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                            @if ($grimoire->new === 1)
                                                <span class="novidade">novo</span>
                                            @endif
                                            <span class="product-name">{{ $grimoire->name }}</span>
                                        </h3>
                                        <p><span class="product-category">{{ $grimoire->Category->name }}</span>
                                            <span class="product-item-class">{{ $grimoire->ItemClass->name }}</span>,
                                            nível
                                            <span class="product-level">{{ $grimoire->lvlMin }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="attributes d-flex justify-content-between align-items-center">
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $grimoire->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $grimoire->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $grimoire->mana }}</span>
                                            </div>
                                        </div>
                                        <div class="card-product-price">
                                            <div class="d-flex flex-column align-items-end">
                                                @if ($grimoire->discount_price !== 0.0)
                                                    <p class="text-decoration-line-through product-discount-price">R$
                                                        <span class="product-price">{{ $grimoire->price }}</span>
                                                    </p>
                                                    <p class="p-product-price">R$ <span
                                                            class="product-discount-price">{{ $grimoire->discount_price }}
                                                        </span>
                                                    </p>
                                                @else
                                                    <p class="p-product-price">R$ <span
                                                            class="product-price">{{ $grimoire->price }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="card-product card-product-see-more position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset('images-for-cards/image-for-cards-Grimório-mágico.png') }}'
                                class="img-fluid">
                            <div
                                class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                                <span class="h2 text-white fw-normal">Ver mais <span
                                        class="fw-bold">grimórios</span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                    data-carousel-slide="prev">
                    <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                        data-carousel-target="#productCarouselGrimoire"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                    data-carousel-slide="next">
                    <span
                        class="carousel-control-next-icon show carousel-product-icon {{ count($productsByItemClass['grimoire-magic']) < 4 ? 'd-none' : '' }}"
                        aria-hidden="true" data-carousel-target="#productCarouselGrimoire"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    @endif
@endsection
