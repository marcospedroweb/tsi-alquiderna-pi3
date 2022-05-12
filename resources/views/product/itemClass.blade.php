@extends('layouts.app')
@section('content')
    <input type="hidden" value="{{ $category_name }}" id="categoryName">
    <input type="hidden" value="{{ $itemClass_name }}" id="itemClassName">
    <section class="container-xxl bg-white sticky-top section-filter">
        <div class="py-2 d-flex flex-column justify-content-center align-items-center">
            @csrf
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
                    <div class="dropdown">
                        @if (request()->sort === 'price_asc')
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderBy"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenado por: Preço menor para maior
                            </button>
                        @elseif (request()->sort === 'price_desc')
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderBy"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenado por: Preço maior para menor
                            </button>
                        @elseif (request()->sort === 'name_asc')
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderBy"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenado por: Nome (A - Z)
                            </button>
                        @elseif (request()->sort === 'name_desc')
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderBy"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenado por: Nome (Z - A)
                            </button>
                        @else
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderBy"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenado por: Nome (A - Z)
                            </button>
                        @endif
                        @php
                            $url = URL::current() . '?';
                            if (isset(request()->filter)) {
                                foreach (request()->filter as $filter) {
                                    $url = $url . ('filter%5B%5D=' . $filter . '&');
                                }
                            }
                        @endphp
                        <ul class="dropdown-menu" aria-labelledby="dropdownOrderBy">
                            <li><a class="dropdown-item {{ request()->sort === 'price_asc' ? 'disabled' : '' }}"
                                    href="{{ $url . '&sort=price_asc' }}">Preço - menor
                                    para
                                    maior</a></li>
                            <li><a class="dropdown-item {{ request()->sort === 'price_desc' ? 'disabled' : '' }}"
                                    href="{{ $url . '&sort=price_desc' }}">Preço -
                                    maior
                                    para
                                    menor</a></li>
                            <li><a class="dropdown-item {{ !isset(request()->sort) || request()->sort === 'name_asc' ? 'disabled' : '' }}"
                                    href="{{ $url . '&sort=name_asc' }}">Nome (A -
                                    Z)</a></li>
                            <li><a class="dropdown-item {{ request()->sort === 'name_desc' ? 'disabled' : '' }}"
                                    href="{{ $url . '&sort=name_desc' }}">Nome (Z -
                                    A)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xxl">
        <div class="row mt-4">
            <div class="col-2 mt-4" id="div-filter-checkbox">
                <form method="GET" action="{{ URL::current() }}" class="sticky-top mb-6">
                    <h3 class="filter-title mb-3 fw-bold">Filtros</h3>
                    <div class="filter-option mt-4">
                        <h4 class="filter-subtitle">Nível mínimo</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-lvl-min-0"
                                id="lvl-min-0" {{ in_array('filter-lvl-min-0', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="lvl-min-0">
                                Nível 0
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-lvl-min-31"
                                id="lvl-min-31" {{ in_array('filter-lvl-min-31', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="lvl-min-31">
                                Nível 31
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-lvl-min-61"
                                id="lvl-min-61" {{ in_array('filter-lvl-min-61', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="lvl-min-61">
                                Nível 61
                            </label>
                        </div>
                    </div>
                    <div class="filter-option mt-3">
                        <h4 class="filter-subtitle">Novidades</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-new-true" id="new"
                                {{ in_array('filter-new-true', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="new">
                                Lançamento
                            </label>
                        </div>
                    </div>
                    <div class="filter-option mt-3">
                        <h4 class="filter-subtitle">Promoção</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-onSale-true"
                                id="onSale" {{ in_array('filter-onSale-true', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="onSale">
                                Em desconto
                            </label>
                        </div>
                    </div>
                    <div class="filter-option mt-3">
                        <h4 class="filter-subtitle">Kit</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filter[]" value="filter-kit-true" id="kit"
                                {{ in_array('filter-kit-true', $checked) ? 'checked' : '' }}>
                            <label class="form-check-label" for="kit">
                                Produto com kit
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            Filtrar
                        </button>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="row div-cards-products mt-4">
                    @if (count($allProducts))
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
                                                    <span
                                                        class="product-item-class">{{ $product->ItemClass->name }}</span>,
                                                    nível
                                                    <span class="product-level">{{ $product->lvlMin }}</span>
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="attributes d-flex justify-content-between align-items-center">
                                                    @if ($product->Category->name === 'Armadura')
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-heart-fill"></i>
                                                            <span
                                                                class="product-attribute-life">{{ $product->life }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-person-running"></i>
                                                            <span
                                                                class="product-attribute-speed">{{ $product->speed }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-shield-slash-fill"></i>
                                                            <span
                                                                class="product-attribute-physical-protection">{{ $product->physical_protection }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <svg class="shield-moon" width="16" height="20"
                                                                viewBox="0 0 16 20" fill="none"
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
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-heart-fill"></i>
                                                            <span
                                                                class="product-attribute-life">{{ $product->life }}</span>
                                                        </div>
                                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'força')
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-shield-slash-fill"></i>
                                                            <span
                                                                class="product-attribute-physical-attack">{{ $product->physical_attack }}</span>
                                                        </div>
                                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'mana')
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-droplet"></i>
                                                            <span
                                                                class="product-attribute-mana">{{ $product->mana }}</span>
                                                        </div>
                                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'agilidade')
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-person-running"></i>
                                                            <span
                                                                class="product-attribute-speed">{{ $product->speed }}</span>
                                                        </div>
                                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'kit')
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-heart-fill"></i>
                                                            <span
                                                                class="product-attribute-life">{{ $product->life }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-person-running"></i>
                                                            <span
                                                                class="product-attribute-speed">{{ $product->speed }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-droplet"></i>
                                                            <span
                                                                class="product-attribute-mana">{{ $product->mana }}</span>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-user-slash"></i>
                                                            <span
                                                                class="product-attribute-physical-attack">{{ $product->physical_attack }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-wand-sparkles"></i>
                                                            <span
                                                                class="product-attribute-magic-attack">{{ $product->magic_attack }}</span>
                                                        </div>
                                                        <div
                                                            class="attribute d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-droplet"></i>
                                                            <span
                                                                class="product-attribute-mana">{{ $product->mana }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="card-product-price">
                                                    <div class="d-flex flex-column align-items-end">
                                                        @if ($product->discount_price !== 0.0)
                                                            <p class="text-decoration-line-through original-price">R$ <span
                                                                    class="product-price">{{ $product->price }}</span>
                                                            </p>
                                                            <p class="p-product-price">R$ <span
                                                                    class="product-discount-price">{{ $product->discount_price }}
                                                                </span>
                                                            </p>
                                                        @else
                                                            <p class="p-product-price">R$ <span
                                                                    class="product-price">{{ $product->price }}</span>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="d-flex justify-content-center aling-items-center" id="no-products">
                            <span>Não foi encontrado nenhum produto com os filtros</span>
                        </div>
                    @endif
                </div>
                <div class="mb-6">
                    {{ $allProducts->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
