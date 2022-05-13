@extends('layouts.app')
@section('content')
    <section id="mainCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="{{ asset('imgs/Carrosel-image-1.png') }}" class="d-block w-100" alt="Imagem de produto">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="{{ asset('imgs/Carrosel-image-2.png') }}" class="d-block w-100" alt="Imagem de produto">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="{{ asset('imgs/Carrosel-image-3.png') }}" class="d-block w-100" alt="Imagem de produto">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon show" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    {{-- Carousel de produtos --}}
    <section class="mb-6">
        <h2 class="mb-3 h2">Novidades</h2>
        <div id="productCarouselNews" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                @foreach ($newProducts as $newProduct)
                    <div class="card-product position-relative overflow-hidden mx-auto">
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
                    class="carousel-control-next-icon show carousel-product-icon {{ count($newProducts) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2 class="mb-3 h2">Armaduras pesadas</h2>
        <div id="productCarouselHeavyArmors" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                @foreach ($heavyArmors as $heavyArmor)
                    <div class="card-product position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
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
                                        @if ($heavyArmor->Category->name === 'Armadura')
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
                                        @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                            </div>
                                        @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-shield-slash-fill"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                            </div>
                                        @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                            </div>
                                        @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                            </div>
                                        @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="bi bi-heart-fill"></i>
                                                <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-person-running"></i>
                                                <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                            </div>
                                        @else
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-user-slash"></i>
                                                <span
                                                    class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-wand-sparkles"></i>
                                                <span
                                                    class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                            </div>
                                            <div class="attribute d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-droplet"></i>
                                                <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($heavyArmor->discount_price !== 0.0)
                                                <p class="text-decoration-line-through original-price">R$ <span
                                                        class="product-price">{{ $heavyArmor->price }}</span></p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $heavyArmor->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $heavyArmor->price }}</span></p>
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
                        <img src='{{ asset('storage/itens/q1ApkkVV1CbFpj78XbvIPLhyyRLvsU5nqMn1Njxg.jpg') }}'
                            class="img-fluid">
                        <div
                            class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                            <span class="h2 text-white">Ver mais armaduras pesadas</span>
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
                    class="carousel-control-next-icon show carousel-product-icon {{ count($heavyArmors) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselHeavyArmors"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <div
            class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }} row d-flex justify-content-center align-items-center mb-4 position-relative">
            {{-- <img src="https://via.placeholder.com/1296x624.png" alt=""> --}}
            <img src="{{ asset('images-banners/index-big-banner-1.png') }}" alt="">
            <div
                class="col-6 position-absolute top-50 end-0 translate-middle-y row flex-column justify-content-center align-items-center me-4">
                <div class="div-text-call col-12 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call">Texto
                        chamativo do produto</h2>
                    <p
                        class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call-paragraph">
                        Paragrafo do produto</p>
                </div>
                <div class="col-12 row flex-column justify-content-center align-items-center">
                    <div
                        class="col {{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-text d-flex flex-column justify-content-end">
                        <div class="d-flex flex-column">
                            <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                @if ($heavyArmor->new === 1)
                                    <span class="novidade">novo</span>
                                @endif
                                <span class="product-name">{{ $heavyArmor->name }}</span>
                            </h3>
                            <p class="product-category-item-class"><span
                                    class="product-category">{{ $heavyArmor->Category->name }}</span>
                                <span class="product-item-class">{{ $heavyArmor->ItemClass->name }}</span>,
                                nível
                                <span class="product-level">{{ $heavyArmor->lvlMin }}</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="attributes d-flex justify-content-between align-items-center">
                                @if ($heavyArmor->Category->name === 'Armadura')
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
                                            class="product-attribute-magic-protection">{{ $heavyArmor->magic_protection }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-shield-slash-fill"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @else
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user-slash"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-wand-sparkles"></i>
                                        <span
                                            class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="div-product-price d-flex justify-content-center align-items-center">
                                <div class="d-flex flex-column align-items-end me-2">
                                    @if ($heavyArmor->discount_price !== 0.0)
                                        <p class="text-decoration-line-through original-price">{{ $heavyArmor->price }}
                                        </p>
                                        <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                    @else
                                        <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                    @endif
                                </div>
                                <div>
                                    <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="big-banner-full row d-flex justify-content-center align-items-center mb-4 position-relative">
            <img src="https://via.placeholder.com/1296x624.png" alt="">
            <div
                class="col-10 position-absolute top-0 start-50 translate-middle-x row flex-column justify-content-center align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="big-banner-full-heading">Nome do produto</h2>
                    <p class="big-banner-full-category-item-class">Categoria item class</p>
                </div>
                <div class="col-12 row justify-content-between align-items-center">
                    <div class="col-3">
                        <div class="attributes d-flex justify-content-between align-items-center">
                            @if ($heavyArmor->Category->name === 'Armadura')
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
                                        class="product-attribute-magic-protection">{{ $heavyArmor->magic_protection }}</span>
                                </div>
                            @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="bi bi-heart-fill"></i>
                                    <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                </div>
                            @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="bi bi-shield-slash-fill"></i>
                                    <span
                                        class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                </div>
                            @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-droplet"></i>
                                    <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                </div>
                            @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-person-running"></i>
                                    <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                </div>
                            @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="bi bi-heart-fill"></i>
                                    <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                </div>
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-person-running"></i>
                                    <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                </div>
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-droplet"></i>
                                    <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                </div>
                            @else
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-user-slash"></i>
                                    <span
                                        class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                </div>
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-wand-sparkles"></i>
                                    <span class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                </div>
                                <div class="attribute d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-droplet"></i>
                                    <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end align-items-center big-banner-full-buy">
                        <div class="div-product-price d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column align-items-end me-2">
                                @if ($heavyArmor->discount_price !== 0.0)
                                    <p class="text-decoration-line-through original-price">{{ $heavyArmor->price }}</p>
                                    <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                @else
                                    <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                @endif
                            </div>
                            <div>
                                <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver produto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }} row d-flex justify-content-center align-items-center mb-4 position-relative">
            <img src="{{ asset('images-banners/index-big-banner-1.png') }}" alt="">
            <div
                class="col-6 position-absolute top-50 end-0 translate-middle-y row flex-column justify-content-center align-items-center me-4">
                <div class="div-text-call col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="w-100 text-start">
                        <h2 class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call">O
                            brilho chama novamente</h2>
                    </div>
                    <p
                        class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call-paragraph">
                        Uma espada, não se sabe quem a forjou ou quem a encontrou,
                        mas ela emiti um grande poder.
                    </p>
                </div>
                <div class="col-12 row flex-column justify-content-center align-items-center">
                    <div
                        class="col {{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-text d-flex flex-column justify-content-end">
                        <div class="d-flex flex-column">
                            <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                @if ($heavyArmor->new === 1)
                                    <span class="novidade">novo</span>
                                @endif
                                <span class="product-name">{{ $heavyArmor->name }}</span>
                            </h3>
                            <p class="product-category-item-class"><span
                                    class="product-category">{{ $heavyArmor->Category->name }}</span>
                                <span class="product-item-class">{{ $heavyArmor->ItemClass->name }}</span>,
                                nível
                                <span class="product-level">{{ $heavyArmor->lvlMin }}</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="attributes d-flex justify-content-between align-items-center">
                                @if ($heavyArmor->Category->name === 'Armadura')
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
                                            class="product-attribute-magic-protection">{{ $heavyArmor->magic_protection }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-shield-slash-fill"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @else
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user-slash"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-wand-sparkles"></i>
                                        <span
                                            class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="div-product-price d-flex justify-content-center align-items-center">
                                <div class="d-flex flex-column align-items-end me-2">
                                    @if ($heavyArmor->discount_price !== 0.0)
                                        <p class="text-decoration-line-through original-price">{{ $heavyArmor->price }}
                                        </p>
                                        <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                    @else
                                        <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                    @endif
                                </div>
                                <div>
                                    <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-6">
                <div class="small-banner row justify-content-center align-items-center position-relative">
                    <img src="{{ asset('images-banners/index-small-banner-1.png') }}" alt="">
                    <div
                        class="col-12 position-absolute bottom-0 start-50 translate-middle-x row flex-column justify-content-center align-items-center mb-4 mx-auto">
                        <div class="small-banner-text w-100 h-100  d-flex flex-column justify-content-end">
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
                                    @if ($heavyArmor->Category->name === 'Armadura')
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
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @else
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="div-product-price d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column align-items-end me-2">
                                        @if ($heavyArmor->discount_price !== 0.0)
                                            <p class="text-decoration-line-through original-price">
                                                {{ $heavyArmor->price }}</p>
                                            <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                        @else
                                            <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver
                                            produto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="small-banner row justify-content-center align-items-center position-relative">
                    <img src="{{ asset('images-banners/index-small-banner-2.png') }}" alt="">
                    <div
                        class="col-12 position-absolute bottom-0 start-50 translate-middle-x row flex-column justify-content-center align-items-center mb-4 mx-auto">
                        <div class="small-banner-text w-100 h-100  d-flex flex-column justify-content-end">
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
                                    @if ($heavyArmor->Category->name === 'Armadura')
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
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                        </div>
                                    @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @else
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="div-product-price d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column align-items-end me-2">
                                        @if ($heavyArmor->discount_price !== 0.0)
                                            <p class="text-decoration-line-through original-price">
                                                {{ $heavyArmor->price }}</p>
                                            <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                        @else
                                            <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver
                                            produto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }} row d-flex justify-content-center align-items-center mb-4 position-relative">
            <img src="{{ asset('images-banners/index-big-banner-2.png') }}" alt="">
            <div
                class="col-6 position-absolute top-50 end-0 translate-middle-y row flex-column justify-content-center align-items-center me-4">
                <div class="div-text-call col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="w-100 text-start">
                        <h2 class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call">
                            Está começando agora?</h2>
                    </div>
                    <p
                        class="{{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-call-paragraph">
                        Adquira agora o kit de armadura para aventureiros iniciantes
                        e ganhe um escudo.</p>
                </div>
                <div class="col-12 row flex-column justify-content-center align-items-center">
                    <div
                        class="col {{ $category_name === 'Armadura' ? 'big-banner-right' : 'big-banner-full' }}-text d-flex flex-column justify-content-end">
                        <div class="d-flex flex-column">
                            <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                @if ($heavyArmor->new === 1)
                                    <span class="novidade">novo</span>
                                @endif
                                <span class="product-name">{{ $heavyArmor->name }}</span>
                            </h3>
                            <p class="product-category-item-class"><span
                                    class="product-category">{{ $heavyArmor->Category->name }}</span>
                                <span class="product-item-class">{{ $heavyArmor->ItemClass->name }}</span>,
                                nível
                                <span class="product-level">{{ $heavyArmor->lvlMin }}</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="attributes d-flex justify-content-between align-items-center">
                                @if ($heavyArmor->Category->name === 'Armadura')
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
                                            class="product-attribute-magic-protection">{{ $heavyArmor->magic_protection }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'vida')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'força')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-shield-slash-fill"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'mana')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'agilidade')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                @elseif($heavyArmor->Category->name === 'Poção' && $heavyArmor->ItemClass->name === 'kit')
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="bi bi-heart-fill"></i>
                                        <span class="product-attribute-life">{{ $heavyArmor->life }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span class="product-attribute-speed">{{ $heavyArmor->speed }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @else
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user-slash"></i>
                                        <span
                                            class="product-attribute-physical-attack">{{ $heavyArmor->physical_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-wand-sparkles"></i>
                                        <span
                                            class="product-attribute-magic-attack">{{ $heavyArmor->magic_attack }}</span>
                                    </div>
                                    <div class="attribute d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-droplet"></i>
                                        <span class="product-attribute-mana">{{ $heavyArmor->mana }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="div-product-price d-flex justify-content-center align-items-center">
                                <div class="d-flex flex-column align-items-end me-2">
                                    @if ($heavyArmor->discount_price !== 0.0)
                                        <p class="text-decoration-line-through original-price">{{ $heavyArmor->price }}
                                        </p>
                                        <p class="p-product-price m-0">{{ $heavyArmor->discount_price }}</p>
                                    @else
                                        <p class="p-product-price m-0">{{ $heavyArmor->price }}</p>
                                    @endif
                                </div>
                                <div>
                                    <a href="{{ route('product.show', 1) }}" class="btn btn-primary">Ver produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
