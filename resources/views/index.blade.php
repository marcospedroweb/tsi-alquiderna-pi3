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
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    {{-- Carousel de produtos --}}
    <section class="mb-6">
        <h2 class="mb-3">Novidades</h2>
        <div id="productCarouselNews" class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                @foreach ($newProducts as $newProduct)
                    <div class="card-product position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}">
                            <img src='{{ asset("$newProduct->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;">
                                        @if ($newProduct->new === '1')
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
                                                <p class="text-decoration-line-through">R$ <span
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
                    class="carousel-control-next-icon carousel-product-icon {{ count($newProducts) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2 class="mb-3">Armaduras pesadas</h2>
        <div id="productCarouselHeavyArmors" class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                @foreach ($heavyArmors as $heavyArmor)
                    <div class="card-product position-relative overflow-hidden mx-auto">
                        <a href="{{ route('product.index') }}" class="link-card-product">
                            <img src='{{ asset("$heavyArmor->image") }}' class="img-fluid">
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;">
                                        @if ($heavyArmor->new === '1')
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $heavyArmor->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $heavyArmor->Category->name }}</span>
                                        <span class="product-item-class">{{ $heavyArmor->ItemClass->name }}</span>, nível
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
                                                <p class="text-decoration-line-through">R$ <span
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
                    class="carousel-control-next-icon carousel-product-icon {{ count($heavyArmors) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productCarouselHeavyArmors"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
@endsection
