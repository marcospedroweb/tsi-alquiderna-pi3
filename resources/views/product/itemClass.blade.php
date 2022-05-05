@extends('layouts.app')
@section('content')
    <section class="container-xxl sticky-top section-filter">
        <div class="bg-white py-2 d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div>
                    @if ($category_name === 'Armadura' || $category_name === 'Grimório')
                        <h2 class="h2">{{ $category_name_edited }} {{ $itemClass_name }}</h2>
                    @elseif ($category_name === 'Arma física' || $category_name === 'Arma mágica')
                        <h2 class="h2">{{ $itemClass_name_edited }}</h2>
                    @elseif($category_name === 'Poção')
                        <h2 class="h2">{{ $category_name_edited }} de {{ $itemClass_name }}</h2>
                    @endif
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#div-filter"
                        aria-expanded="false" aria-controls="div-filter">
                        <i class="fa-solid fa-filter"></i> Filtrar
                    </button>
                </div>
            </div>
            <div class="collapse p-3 mt-3" id="div-filter">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="h3 mb-3">Filtrar:</h3>
                    <div class="d-flex justify-content-center align-items-start mb-3">
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Preço</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="price" value="desc"
                                    id="filter-order-by-price-desc">
                                <label class="form-check-label" for="filter-order-by-price-desc">
                                    Preço: <i class="fa-solid fa-arrow-down-1-9"></i>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="price" value="asc"
                                    id="filter-order-by-price-asc">
                                <label class="form-check-label" for="filter-order-by-price-asc">
                                    Preço: <i class="fa-solid fa-arrow-up-1-9"></i>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Alfabética</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="name" value="desc"
                                    id="filter-order-by-name-desc">
                                <label class="form-check-label" for="filter-order-by-name-desc">
                                    Nome: <i class="fa-solid fa-arrow-down-a-z"></i>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="name" value="asc"
                                    id="filter-order-by-name-asc">
                                <label class="form-check-label" for="filter-order-by-name-asc">
                                    Nome: <i class="fa-solid fa-arrow-up-a-z"></i>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Promoção</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="onSale" value="onSale"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Promoção: produtos em promoção
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Nível minimo</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lvlMin" value="desc"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Nível minimo: <i class="fa-solid fa-arrow-down-1-9"></i>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lvlMin" value="asc"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Nível minimo: <i class="fa-solid fa-arrow-up-1-9"></i>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Lançamento</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="new" value="new"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Lançamento: produtos lançamentos
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start filter-order-by-option mb-3">
                            <h4 class="h4">Atributos</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="life" value="desc"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Vida: <i class="fa-solid fa-arrow-down-1-9"></i>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="life" value="asc"
                                    id="filter-order-by-lvl-min">
                                <label class="form-check-label" for="filter-order-by-lvl-min">
                                    Vida: <i class="fa-solid fa-arrow-up-1-9"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary align-self-end">
                        Filtrar
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xxl">
        <div class="row div-cards-products mt-4">
            @foreach ($allProducts as $product)
                <div class="col-4">
                    <div class="mb-4 card-product position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}">
                            <img src='{{ asset("$product->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($product->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $product->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $product->Category->name }}</span>
                                        <span class="product-item-class">{{ $product->ItemClass->name }}</span>, nível
                                        <span class="product-level">{{ $product->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
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
                                                <span
                                                    class="product-attribute-magic-attack">{{ $product->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $product->mana }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($product->discount_price !== 0.0)
                                                <p class="text-decoration-line-through original-price">R$ <span
                                                        class="product-price">{{ $product->price }}</span></p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $product->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $product->price }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-6">
            {{ $allProducts->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
