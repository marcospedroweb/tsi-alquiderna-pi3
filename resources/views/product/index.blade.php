@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Produto</h2>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary active">Listar produtos</a>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Criar produto</a>
            <a href="{{ route('product.trash') }}" class="btn btn-primary">Lixeira produto</a>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary">Crud geral</a>
        </div>
    </div>
    <div class="my-5">
        <span>Quantidade de produtos: {{ $products->total() }} cadastrados</span>
        <div class="row">
            <div class="col">
                <span class="d-block">Armaduras leves: {{ count($allProductsByCategory['lightArmors']) }}</span>
                <span class="d-block">Armaduras médias: {{ count($allProductsByCategory['mediumArmors']) }}</span>
                <span class="d-block">Armaduras pesadas: {{ count($allProductsByCategory['heavyArmors']) }}</span>
                <span class="d-block">kits armaduras:
                    {{ count($allProductsByCategory['kitsLightArmors']) + count($allProductsByCategory['kitsMediumArmors']) + count($allProductsByCategory['kitsHeavyArmors']) }}</span>
            </div>
            <div class="col">
                <span class="d-block">espadas: {{ count($allProductsByCategory['swords']) }}</span>
                <span class="d-block">machados: {{ count($allProductsByCategory['axes']) }}</span>
                <span class="d-block">arcos: {{ count($allProductsByCategory['bows']) }}</span>
                <span class="d-block">kits armas físicas:
                    {{ count($allProductsByCategory['kitsPhysicalWeapons']) }}</span>
            </div>
            <div class="col">
                <span class="d-block">varinhas: {{ count($allProductsByCategory['wands']) }}</span>
                <span class="d-block">kits armas mágicas:
                    {{ count($allProductsByCategory['kitsMagicWeapons']) }}</span>
            </div>
            <div class="col">
                <span class="d-block">poções de Vida: {{ count($allProductsByCategory['lifePotions']) }}</span>
                <span class="d-block">poções de Força:
                    {{ count($allProductsByCategory['strengthPotions']) }}</span>
                <span class="d-block">poções de Mana: {{ count($allProductsByCategory['manaPotions']) }}</span>
                <span class="d-block">kits de poções: {{ count($allProductsByCategory['kitsPotions']) }}</span>
            </div>
            <div class="col">
                <span class="d-block">poções de grimórios:
                    {{ count($allProductsByCategory['grimoires']) }}</span>
                <span class="d-block">kits grimorios: {{ count($allProductsByCategory['kitsGrimoires']) }}</span>
            </div>
        </div>
    </div>
    <div class="my-3 d-flex flex-column justify-content-center align-items-start">
        @if (isset($filterByCategory) && isset($filterByItemClass) && $filterByItemClass != '')
            <h3>Filtrado por: <span class="filtered-by">{{ $filterByCategory }} - {{ $filterByItemClass }}</span>
            </h3>
        @elseif (isset($filterByCategory))
            <h3>Filtrado por: <span class="filtered-by">{{ $filterByCategory }}</span></h3>
        @else
            <h3>Filtrado por: <span class="filtered-by">nenhum</span></h3>
        @endif
        <form action="{{ route('product.filter') }}" method="POST"
            class="form-filter-by d-flex justify-content-between align-items-center w-100">
            @csrf
            <div class="d-flex justify-content-center align-items-center">
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Armadura
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Armadura-none">Todas
                                armaduras</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Armadura-leve">Armaduras leves</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Armadura-média">Armaduras médias</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Armadura-pesada">Armaduras pesadas</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Armadura-kit">Armaduras kits</button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Armas físicas
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma física-none">Todas
                                Armas físicas</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma física-espada">Espadas</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma física-machado">Machados</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma física-arco">Arcos</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma física-kit">kits</button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Armas mágicas
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma mágica-none">Todas
                                Armas mágicas</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma mágica-varinha">Varinha</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Arma mágica-kit">kits</button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Poções
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Poção-none">Todas
                                poções</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Poção-vida">Poções de vida</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Poção-força">Poções de força</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Poção-mana">Poções de mana</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Poção-kit">kits</button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Grimórios
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Grimório-none">Todas os grimórios</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Grimório-mágico">mágico</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="none-none-Grimório-kit">kits</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenado por:
                        <span class="fw-bold">
                            {{ isset($filterByOrderByColumn) && $filterByOrderByColumn ? $filterByOrderByColumn . ' - ' : 'nenhum' }}
                            {{ isset($filterByOrderByValue) && $filterByOrderByValue ? $filterByOrderByValue : '' }}
                        </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="name-ASC-none-none">Ordenar por Nome (A - Z)</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="name-DESC-none-none">Ordenar por Nome (Z - A)</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="price-ASC-none-none">Ordenar por preço crescente</button>
                        </li>
                        <li class="dropdown-item">
                            <button type="submit" class="btn" name="filterByCategory"
                                value="price-DESC-none-none">Ordenar por preço decrescente</button>
                        </li>
                    </ul>
                </div>
            </div>
            <input type="hidden" class="btn" name="filterByOrderByColumn"
                value="{{ isset($filterByOrderByColumn) && $filterByOrderByColumn ? $filterByOrderByColumn : '' }}">
            <input type="hidden" class="btn" name="filterByOrderByValue"
                value="{{ isset($filterByOrderByValue) && $filterByOrderByValue ? $filterByOrderByValue : '' }}">
            <input type="hidden" class="btn" name="filterByCategory"
                value="{{ isset($filterByCategory) && $filterByCategory ? $filterByCategory : '' }}">
            <input type="hidden" class="btn" name="filterByItemClass"
                value="{{ isset($filterByItemClass) && $filterByItemClass ? $filterByItemClass : '' }}">
        </form>
    </div>
    <div class="row justify-content-between align-items-center mb-6">
        @foreach ($products as $product)
            <div class="col col-lg-4 row bg-secondary p-3 flex-column justify-content-center align-items-center mb-4">
                <div class="col justify-content-center align-items-center">
                    <div class="card-product-view position-relative overflow-hidden mx-auto mb-3">
                        <img src='{{ asset("$product->image") }}' class="img-fluid">
                        <div
                            class="card-product-view-text w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column">
                            <div class="d-flex flex-column">
                                <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                    @if ($product->new === 1)
                                        <span class="novidade">novo</span>
                                    @endif
                                    {{ $product->name }}
                                </h3>
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
                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'vida')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $product->life }}</span>
                                        </div>
                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'força')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span>{{ $product->physical_attack }}</span>
                                        </div>
                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'mana')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $product->mana }}</span>
                                        </div>
                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'agilidade')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $product->speed }}</span>
                                        </div>
                                    @elseif($product->Category->name === 'Poção' && $product->ItemClass->name === 'kit')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $product->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $product->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $product->mana }}</span>
                                        </div>
                                    @else
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span>{{ $product->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span>{{ $product->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $product->mana }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-product-view-price">
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
                    </div>
                </div>
                <div class="div-product-info col justify-content-center align-items-center">
                    <h3 class="h3 mb-3 fw-bold text-center">Photo tirada por <a
                            href="{{ $product->author_link }}">{{ $product->author_name }}</a> em <a
                            href="{{ $product->source_website_link }}">{{ $product->SourceWebsite->name }}</a>
                    </h3>
                    <p class="recommendation-text">{{ $product->recommendation }}</p>
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
                            <a href="{{ route('product.edit', $product->id) }}"
                                class="btn btn-lg btn-primary me-4">Editar</a>
                            <a href="{{ route('product.destroy', $product->id) }}"
                                class="btn btn-lg btn-danger">Apagar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $products->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
