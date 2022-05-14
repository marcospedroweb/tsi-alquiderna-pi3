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
    <h1>{{ URL::current() }}</h1>
    <form action="{{ URL::current() }}" method="GET"
        class="row flex-column justify-content-center align-item-center mb-6">
        <div class="col-12">
            @if (isset($checked['category']) && $checked['category'] && isset($checked['itemClass']) && $checked['itemClass'])
                <h3>Filtrado por: <span class="filtered-by">{{ $checked['category'] }} -
                        {{ $checked['itemClass'] }}</span></h3>
            @elseif(isset($checked['category']) && $checked['category'])
                <h3>Filtrado por: <span class="filtered-by">{{ $checked['category'] }} - nenhum</span></h3>
            @else
                <h3>Filtrado por: <span class="filtered-by">nenhum</span></h3>
            @endif
        </div>
        <div class="col-12 my-3 d-flex justify-content-between align-items-start">
            <div class="form-filter-by d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilters"
                    aria-expanded="false" aria-controls="collapseFilters">
                    Filtros
                </button>
            </div>
            <div class="dropdown">
                <button class="btn btn-primary  dropdown-toggle" type="button" id="filter-by-armor"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenado por:
                    <span class="fw-bold">
                        @if (isset(request()->sort) && request()->sort === 'price_asc')
                            Preço - menor para maior
                        @elseif(isset(request()->sort) && request()->sort === 'price_desc')
                            Preço - maior para menor
                        @elseif(isset(request()->sort) && request()->sort === 'name_asc')
                            Nome (A - Z)
                        @elseif(isset(request()->sort) && request()->sort === 'name_asc')
                            Nome (Z - A)
                        @else
                            Data de criação - menor para maior
                        @endif
                    </span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="filter-by-armor">
                    <li><button class="btn dropdown-item {{ request()->sort === 'name_asc' ? 'disabled' : '' }}"
                            name="sort" value="name_asc">Ordenar por Nome
                            (A
                            - Z)</button></li>
                    <li><button class="btn dropdown-item {{ request()->sort === 'name_desc' ? 'disabled' : '' }}"
                            name="sort" value="name_desc">Ordenar por
                            Nome (Z - A)</button></li>
                    <li><button class="btn dropdown-item {{ request()->sort === 'price_asc' ? 'disabled' : '' }}"
                            name="sort" value="price_asc">Preço - menor
                            para
                            maior</button></li>
                    <li><button class="btn dropdown-item {{ request()->sort === 'price_desc' ? 'disabled' : '' }}"
                            name="sort" value="price_desc">Preço - maior
                            para menor</button></li>
                    {{-- <li><a class="dropdown-item {{ request()->sort === 'name_asc' ? 'disabled' : '' }}"
                            href="{{ URL::current() . '&sort=name_asc' }}">Ordenar por Nome (A
                            - Z)</a></li>
                    <li><a class="dropdown-item {{ request()->sort === 'name_desc' ? 'disabled' : '' }}"
                            href="{{ URL::current() . '&sort=name_desc' }}">Ordenar por Nome (Z - A)</a></li>
                    <li><a class="dropdown-item {{ request()->sort === 'price_asc' ? 'disabled' : '' }}"
                            href="{{ URL::current() . '&sort=price_asc' }}">Preço - menor
                            para
                            maior</a></li>
                    <li><a class="dropdown-item {{ request()->sort === 'price_desc' ? 'disabled' : '' }}"
                            href="{{ URL::current() . '&sort=price_desc' }}">Preço - maior para menor</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="col-12 collapse" id="collapseFilters">
            <div class="card card-body row flex-row justify-content-between align-items-center">
                <div class="col-6">
                    @php
                        if (!isset($checked['category'])) {
                            $checked['category'] = '';
                        }
                        if (!isset($checked['itemClass'])) {
                            $checked['itemClass'] = '';
                        }
                    @endphp
                    <h4>Categoria</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            {{ $checked['category'] == 'Armadura' ? 'checked' : '' }} value="Armadura"
                            name="filter[category]" id="category-armor">
                        <label class="form-check-label" for="category-armor">
                            Armadura
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            {{ $checked['category'] == 'Arma física' ? 'checked' : '' }} value="Arma física"
                            name="filter[category]" id="category-physical-weapon">
                        <label class="form-check-label" for="category-physical-weapon">
                            Arma física
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            {{ $checked['category'] == 'Arma mágica' ? 'checked' : '' }} value="Arma mágica"
                            name="filter[category]" id="category-magic-weapon">
                        <label class="form-check-label" for="category-magic-weapon">
                            Arma mágica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            {{ $checked['category'] == 'Poção' ? 'checked' : '' }} value="Poção" name="filter[category]"
                            id="category-potion">
                        <label class="form-check-label" for="category-potion">
                            Poção
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            {{ $checked['category'] == 'Grimório' ? 'checked' : '' }} value="Grimório"
                            name="filter[category]" id="category-grimorie">
                        <label class="form-check-label" for="category-grimorie">
                            Grimório
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <h4>Classe do item</h4>
                    <div class="row justify-content-center align-items-start">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'leve' ? 'checked' : '' }} value="leve"
                                    name="filter[itemClass]" id="itemClass-light">
                                <label class="form-check-label" for="itemClass-light">
                                    leve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'média' ? 'checked' : '' }} value="média"
                                    name="filter[itemClass]" id="itemClass-medium">
                                <label class="form-check-label" for="itemClass-medium">
                                    média
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'pesada' ? 'checked' : '' }} value="pesada"
                                    name="filter[itemClass]" id="itemClass-heavy">
                                <label class="form-check-label" for="itemClass-heavy">
                                    pesada
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'espada' ? 'checked' : '' }} value="espada"
                                    name="filter[itemClass]" id="itemClass-sword">
                                <label class="form-check-label" for="itemClass-sword">
                                    Espada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'machado' ? 'checked' : '' }} value="machado"
                                    name="filter[itemClass]" id="itemClass-axe">
                                <label class="form-check-label" for="itemClass-axe">
                                    Machado
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'arco' ? 'checked' : '' }} value="arco"
                                    name="filter[itemClass]" id="itemClass-bow">
                                <label class="form-check-label" for="itemClass-bow">
                                    Arco
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'varinha' ? 'checked' : '' }} value="varinha"
                                    name="filter[itemClass]" id="itemClass-wand">
                                <label class="form-check-label" for="itemClass-wand">
                                    Varinha
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'vida' ? 'checked' : '' }} value="vida"
                                    name="filter[itemClass]" id="itemClass-life">
                                <label class="form-check-label" for="itemClass-life">
                                    Vida
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'mana' ? 'checked' : '' }} value="mana"
                                    name="filter[itemClass]" id="itemClass-mana">
                                <label class="form-check-label" for="itemClass-mana">
                                    Mana
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'força' ? 'checked' : '' }} value="força"
                                    name="filter[itemClass]" id="itemClass-strength">
                                <label class="form-check-label" for="itemClass-strength">
                                    Força
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'agilidade' ? 'checked' : '' }} value="agilidade"
                                    name="filter[itemClass]" id="itemClass-speed">
                                <label class="form-check-label" for="itemClass-speed">
                                    Agilidade
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'mágico' ? 'checked' : '' }} value="mágico"
                                    name="filter[itemClass]" id="itemClass-magic">
                                <label class="form-check-label" for="itemClass-magic">
                                    mágico
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ $checked['itemClass'] == 'kit' ? 'checked' : '' }} value="kit"
                                    name="filter[itemClass]" id="itemClass-kit">
                                <label class="form-check-label" for="itemClass-kit">
                                    kit
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Filtar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row justify-content-between align-items-center mb-6">
        @if (count($products))
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
                                    @if ($product->kit === 1)
                                        <p>(Kit) {{ $product->Category->name }} {{ $product->ItemClass->name }}, nível
                                            {{ $product->lvlMin }}
                                        </p>
                                    @else
                                        <p>{{ $product->Category->name }} {{ $product->ItemClass->name }}, nível
                                            {{ $product->lvlMin }}
                                        </p>
                                    @endif
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
                        <h1>{{ $product->id }}</h1>
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
            {{ $products->links('vendor.bootstrap-5', ['category' => $checked['category'], 'itemClass' => $checked['itemClass'], 'sort' => request()->sort]) }}
        @else
            <div class="d-flex justify-content-center aling-items-center" id="no-products">
                <span>Não foi encontrado nenhum produto com os filtros</span>
            </div>
        @endif
    </div>
@endsection
