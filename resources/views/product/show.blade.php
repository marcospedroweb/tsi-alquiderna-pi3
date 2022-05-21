@extends('layouts.app')
@section('content')
    <section class="bg-white sticky-top py-2" id="section-info">
        <div class="container-xxl ">
            <div class="row justify-content-between align-items-center" id="product-sticky-banner">
                <div class="col-8">
                    <h2 class="h2 m-0">{{ $mainProduct->name }}</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <a href="#" class="link-primary me-2">Descrição</a>
                    <a href="#" class="link-primary me-2">Atributos</a>
                    <a href="#" class="link-primary me-2">Avaliações</a>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl mt-4 mb-6">
        <div class="row justify-content-center align-items-start">
            <div class="col-6 overflow-hidden sticky-top" id="main-product-image">
                <img src="{{ asset($mainProduct->image) }}" class="rounded" alt="imagem do produto">
            </div>
            <form class="col-6 bg-white rounded">
                <div class="py-3">
                    <h3 class="h3 mb-5 text-center">Compre {{ $mainProduct->name }}</h3>
                    <div class="mb-5 border">
                        <h4 class="h4">Calcular frete e prazo</h4>
                        <div class="mb-3 row">
                            <div class="col-3">
                                <input type="tel" class="form-control" id="input-cep" placeholder="00000-000">
                            </div>
                            <div class="col">
                                <button type="button" id="search-cep" class="btn btn-primary">Calcular frete</button>
                            </div>
                        </div>
                        <div class="d-none" id="div-cep">
                            <p>Entrega para <span class="street fw-bold">Rua com algum nome completo aqui</span></p>
                            <div id="div-cep-options">
                                <div class="option-cep">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>
                                        <span><span>Receba até</span> 00 de dezembro</span>
                                        <span>R$ 999,99</span>
                                    </p>
                                </div>
                                <div class="option-cep">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>
                                        <span><span>Receba até</span> 00 de dezembro</span>
                                        <span>R$ 999,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 border" id="lvl">
                        <h4 class="h4">Escolha o nível
                            {{ $mainProduct->Category->name === 'Grimório' ? 'do' : 'da' }}
                            {{ $mainProduct->Category->name }}
                        </h4>
                        <div class="row">
                            <div class="col-4">
                                <div class="block-option form-check d-flex flex-column text-center p-2">
                                    <input class="form-check-input mx-auto" type="radio" name="durability"
                                        id="option-lvl-61" value="0">
                                    <label class="form-check-label d-flex flex-column mt-3 fw-bold" for="option-lvl-61">
                                        Nível 61
                                        <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                0</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-option form-check d-flex flex-column text-center p-2">
                                    <input class="form-check-input mx-auto" type="radio" name="durability"
                                        id="option-lvl-70" value="300">
                                    <label class="form-check-label d-flex flex-column mt-3 fw-bold" for="option-lvl-70">
                                        Nível 70
                                        <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                300</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-option form-check d-flex flex-column text-center p-2">
                                    <input class="form-check-input mx-auto" type="radio" name="durability"
                                        id="option-lvl-80" value="600">
                                    <label class="form-check-label d-flex flex-column mt-3 fw-bold" for="option-lvl-80">
                                        Nível 80
                                        <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                600</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4 mt-3">
                                <div class="block-option form-check d-flex flex-column text-center p-2">
                                    <input class="form-check-input mx-auto" type="radio" name="durability"
                                        id="option-lvl-90" value="900">
                                    <label class="form-check-label d-flex flex-column mt-3 fw-bold" for="option-lvl-90">
                                        Nível 90
                                        <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                900</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4 mt-3">
                                <div class="block-option form-check d-flex flex-column text-center p-2">
                                    <input class="form-check-input mx-auto" type="radio" name="durability"
                                        id="option-lvl-100" value="1200">
                                    <label class="form-check-label d-flex flex-column mt-3 fw-bold" for="option-lvl-100">
                                        Nível 100
                                        <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                1200</span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <small class="d-inline-block mt-2">A durabilidade
                            {{ $mainProduct->Category->name === 'Grimório' ? 'do' : 'da' }}
                            {{ $mainProduct->Category->name }} será afetada pelo nível</small>
                    </div>
                    @if ($mainProduct->enchant)
                        <div class="mb-5 border" id="enchant">
                            <h4 class="h4">Encantar produto?</h4>
                            <div class="row flex-column justify-content-center align-items-center">
                                <div class="col-12">
                                    <select class="form-select" aria-label="encantar">
                                        <option disabled>Encantar produto?</option>
                                        <option value="0" selected>Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="d-none col-10 d-flex justify-content-center align-items-start">
                                    <div class="form-check mt-3 me-3">
                                        <input class="form-check-input" type="checkbox" name="enchant-life" value="300"
                                            id="enchant-checkbox-life">
                                        <label
                                            class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                            for="enchant-checkbox-life">
                                            Vida
                                            <span class="d-none">+ 300</span>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3 me-3">
                                        <input class="form-check-input" type="checkbox" name="enchant-life" value="30"
                                            id="enchant-checkbox-speed">
                                        <label
                                            class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                            for="enchant-checkbox-speed">
                                            Agilidade

                                            <span class="d-none">+ 30</span>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3 me-3">
                                        <input class="form-check-input" type="checkbox" name="enchant-life" value="150"
                                            id="enchant-checkbox-physical-protection">
                                        <label
                                            class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                            for="enchant-checkbox-physical-protection">
                                            Proteção física
                                            <span class="d-none">+ 150</span>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3 me-3">
                                        <input class="form-check-input" type="checkbox" name="enchant-life" value="150"
                                            id="enchant-checkbox-magic-protection">
                                        <label
                                            class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                            for="enchant-checkbox-magic-protection">
                                            Proteção mágica
                                            <span class="d-none">+ 150</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="d-flex justify-content-center mb-4">
                        <div class="p-4 rounded" id="purchase-description">
                            <h4 class="h4 fw-bold text-center">Descrição da compra</h4>
                            <ul class="list-unstyled">
                                <li
                                    class="d-flex justify-content-start align-items-start mt-2 p-0 purchase-description-option">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span
                                        class="purchase-description-info d-flex justify-content-start align-items-center flex-grow-1">
                                        <span class="purchase-title">Preço padrão</span>
                                        <span class="ms-auto">
                                            <span class="purchase-price">R$ <span class="d-inline-block"
                                                    style="min-width: 41px">9.999</span></span>
                                        </span>
                                    </span>
                                </li>
                                <li
                                    class="d-flex justify-content-start align-items-start mt-2 p-0 position-relative purchase-description-option">
                                    <i class="fa-solid fa-bars-progress"></i>
                                    <span
                                        class="purchase-description-info d-flex justify-content-start align-items-center flex-grow-1">
                                        <span class="purchase-title" style="min-width: 132px">
                                            Durabildade</span>
                                        <ul class="purchase-list-info" style="min-width: 124px">
                                            <li>Nível 100</li>
                                        </ul>
                                        <span class="ms-auto">
                                            <span class="purchase-price">R$ <span class="d-inline-block"
                                                    style="min-width: 41px">9.999</span></span>
                                        </span>
                                    </span>
                                </li>
                                <li
                                    class="d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                    <span
                                        class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                        <span class="purchase-title" style="min-width: 132px">
                                            Encantamento</span>
                                        <ul class="purchase-list-info" style="min-width: 124px">
                                            <li>Vida</li>
                                            <li>Agilidade</li>
                                            <li>Proteção física</li>
                                            <li>Proteção mágica</li>
                                        </ul>
                                        <span class="ms-auto">
                                            <span class="purchase-price">R$ <span class="d-inline-block"
                                                    style="min-width: 41px">9.999</span></span>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 row flex-column justify-content-center align-items-center">
                        <a href="#" class="col-12 btn btn-primary mb-4">Continuar compra</a>
                        <div class="col-12 py-2 rounded" id="mark-product">
                            <h4>Ainda decidindo?</h4>
                            <div class="d-flex justify-content-center align-items-center mt-2">
                                <p class="m-0">Adicione esse produto a sua lista de desejos e você poderá voltar
                                    para ve-lo denovo</p>
                                <i class="fa-regular fa-bookmark"></i>
                                <i class="fa-solid fa-bookmark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="container-xxl mb-6 rounded" id="section-desc">
        <div class="row justify-content-between align-items-center py-3 position-relative">
            <div class="col-6">
                <h3 class="h3">Descrição do produto</h3>
                <p>{{ $mainProduct->description }}</p>
            </div>
            <span class="separator position-absolute top-50 start-50 translate-middle"></span>
            <div class="col-6">
                <h3 class="h3">Nome do produto</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option">
                            texto
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl mb-6" id="section-attributes">
        <div class="row justify-content-center align-items-end py-3 position-relative">
            <div class="col-6 row justify-content-center align-items-center">
                <h3 class="col-11 h3 ps-0">Atributos</h3>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
            </div>
            <div class="col-6 row justify-content-center align-items-center">
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
                <div class="col-4 mb-2"><i class="fa-solid fa-droplet"></i></div>
                <div class="col-7 mb-2"><span>999</span></div>
            </div>
        </div>
    </section>
    <section class="container-xxl mb-6" id="avaliation">
        <h2 class="visually-hidden">Avaliações</h2>
        <div class="bg-white row justify-content-between align-items-center">
            <div class="col-12 row justify-content-between align-items-center position-relative my-4">
                <div class="col-6">
                    avaliação
                </div>
                <span class="separator position-absolute top-50 start-50 translate-middle"></span>
                <div class="col-6 mb-4">
                    <span>Gostaria de deixar sua opnião sobre o produto?</span>
                    <a href="#" class="btn btn-primary">Avaliar produto</a>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="comment p-3">
                    <span class="h3 fw-bold title">Titulo do texto</span>
                    <span class="d-block">estrelas</span>
                    <span class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                        delectus voluptate ad,
                        dolores omnis assumenda porro distinctio reprehenderit. Ratione eveniet saepe laudantium nemo quo
                        dignissimos ipsam, maxime doloremque dolorum quas qui ipsum explicabo sit recusandae officiis
                        exercitationem nobis! Voluptate, illum expedita! Aut doloribus assumenda quidem tempore dolores
                        similique laborum rerum! Non, maxime nesciunt repellendus voluptates repudiandae accusantium minus
                        sunt aliquid animi ex ipsa enim perferendis veniam blanditiis tempora veritatis vel? Sint
                        consequuntur libero, repellat veritatis rerum quia similique eum quae nemo, ut dolore excepturi modi
                        laborum minus quod aut aliquam, exercitationem non ea assumenda! Accusamus facere maxime sunt
                        dignissimos eos!</span>
                    <span class="d-block fw-bold user-name">Nome do usuario em 00/00/0000</span>
                </div>
                <div class="comment p-3">
                    <span class="h3 fw-bold title">Titulo do texto</span>
                    <span class="d-block">estrelas</span>
                    <span class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                        delectus voluptate ad,
                        dolores omnis assumenda porro distinctio reprehenderit. Ratione eveniet saepe laudantium nemo quo
                        dignissimos ipsam, maxime doloremque dolorum quas qui ipsum explicabo sit recusandae officiis
                        exercitationem nobis! Voluptate, illum expedita! Aut doloribus assumenda quidem tempore dolores
                        similique laborum rerum! Non, maxime nesciunt repellendus voluptates repudiandae accusantium minus
                        sunt aliquid animi ex ipsa enim perferendis veniam blanditiis tempora veritatis vel? Sint
                        consequuntur libero, repellat veritatis rerum quia similique eum quae nemo, ut dolore excepturi modi
                        laborum minus quod aut aliquam, exercitationem non ea assumenda! Accusamus facere maxime sunt
                        dignissimos eos!</span>
                    <span class="d-block fw-bold user-name">Nome do usuario em 00/00/0000</span>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="container-xxl mb-6">
        <h2 class="mb-3 h2">Produtos da mesma categoria, {{ $category_name }}</h2>
        <div id="productsWithSameCategory" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsWithSameCategory as $productSameCategory)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.show', $productSameCategory->id) }}">
                            <img src='{{ asset("$productSameCategory->image") }}'>
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productSameCategory->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productSameCategory->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productSameCategory->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $productSameCategory->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productSameCategory->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $productSameCategory->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $productSameCategory->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $productSameCategory->mana }}</span>
                                        </div>
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productSameCategory->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$
                                                    <span class="product-price">{{ $productSameCategory->price }}</span>
                                                </p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productSameCategory->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productSameCategory->price }}</span>
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
                    <a href="{{ route('product.category', 'Armadura') }}" class="link-card-product">
                        <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'>
                        <div
                            class="div-link-to-more w-100 h-100 position-absolute top-50 start-0 translate-middle-y d-flex  justify-content-center align-items-center">
                            <span class="h2 text-white fw-normal">Ver mais <span class="fw-bold">arcos</span></span>
                        </div>
                    </a>
                </div>
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productsWithSameCategory"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($productsWithSameCategory) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productsWithSameCategory"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="mb-3 h2">Produtos de outras categorias, {{ $productsWithOtherCategory1[1] }}</h2>
        <div id="productsWithOtherCategory1" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsWithOtherCategory1[0] as $productOtherCategory)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.show', $productOtherCategory->id) }}">
                            <img src='{{ asset("$productOtherCategory->image") }}'>
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productOtherCategory->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productOtherCategory->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productOtherCategory->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $productOtherCategory->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productOtherCategory->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $productOtherCategory->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $productOtherCategory->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span class="product-attribute-mana">{{ $productOtherCategory->mana }}</span>
                                        </div>
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productOtherCategory->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$
                                                    <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
                                                </p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productOtherCategory->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
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
                    <a href="{{ route('product.category', 'Armadura') }}" class="link-card-product">
                        <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'>
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
                    data-carousel-target="#productsWithOtherCategory1"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($productsWithOtherCategory1[0]) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productsWithOtherCategory1"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="mb-3 h2">Produtos de outras categorias, {{ $productsWithOtherCategory2[1] }}</h2>
        <div id="productsWithOtherCategory2" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsWithOtherCategory2[0] as $productOtherCategory)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.show', $productOtherCategory->id) }}">
                            <img src='{{ asset("$productOtherCategory->image") }}'>
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productOtherCategory->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productOtherCategory->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productOtherCategory->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $productOtherCategory->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productOtherCategory->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $productOtherCategory->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $productOtherCategory->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span
                                                class="product-attribute-mana">{{ $productOtherCategory->mana }}</span>
                                        </div>
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productOtherCategory->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$
                                                    <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
                                                </p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productOtherCategory->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
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
                    <a href="{{ route('product.category', 'Armadura') }}" class="link-card-product">
                        <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'>
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
                    data-carousel-target="#productsWithOtherCategory2"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($productsWithOtherCategory2[0]) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productsWithOtherCategory2"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="mb-3 h2">Produtos de outras categorias, {{ $productsWithOtherCategory3[1] }}</h2>
        <div id="productsWithOtherCategory3" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsWithOtherCategory3[0] as $productOtherCategory)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.show', $productOtherCategory->id) }}">
                            <img src='{{ asset("$productOtherCategory->image") }}'>
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productOtherCategory->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productOtherCategory->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productOtherCategory->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $productOtherCategory->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productOtherCategory->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $productOtherCategory->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $productOtherCategory->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span
                                                class="product-attribute-mana">{{ $productOtherCategory->mana }}</span>
                                        </div>
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productOtherCategory->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$
                                                    <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
                                                </p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productOtherCategory->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
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
                    <a href="{{ route('product.category', 'Armadura') }}" class="link-card-product">
                        <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'>
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
                    data-carousel-target="#productsWithOtherCategory3"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($productsWithOtherCategory3[0]) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productsWithOtherCategory3"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="mb-3 h2">Produtos de outras categorias, {{ $productsWithOtherCategory4[1] }}</h2>
        <div id="productsWithOtherCategory4" data-translate-value='0' class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex justify-content-start overflow-hidden" data-carousel-show-card="4">
                @foreach ($productsWithOtherCategory4[0] as $productOtherCategory)
                    <div class="card-product position-relative overflow-hidden">
                        <a href="{{ route('product.show', $productOtherCategory->id) }}">
                            <img src='{{ asset("$productOtherCategory->image") }}'>
                            <div
                                class="card-product-text w-100 h-100 position-absolute bottom-0 start-50 translate-middle-x d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column">
                                    <h3 style="word-wrap: break-word;" class="d-flex flex-column">
                                        @if ($productOtherCategory->new === 1)
                                            <span class="novidade">novo</span>
                                        @endif
                                        <span class="product-name">{{ $productOtherCategory->name }}</span>
                                    </h3>
                                    <p><span class="product-category">{{ $productOtherCategory->Category->name }}</span>
                                        <span
                                            class="product-item-class">{{ $productOtherCategory->ItemClass->name }}</span>,
                                        nível
                                        <span class="product-level">{{ $productOtherCategory->lvlMin }}</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="attributes d-flex justify-content-between align-items-center">
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span
                                                class="product-attribute-physical-attack">{{ $productOtherCategory->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span
                                                class="product-attribute-magic-attack">{{ $productOtherCategory->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span
                                                class="product-attribute-mana">{{ $productOtherCategory->mana }}</span>
                                        </div>
                                    </div>
                                    <div class="card-product-price">
                                        <div class="d-flex flex-column align-items-end">
                                            @if ($productOtherCategory->discount_price !== 0.0)
                                                <p class="text-decoration-line-through product-discount-price">R$
                                                    <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
                                                </p>
                                                <p class="p-product-price">R$ <span
                                                        class="product-discount-price">{{ $productOtherCategory->discount_price }}
                                                    </span>
                                                </p>
                                            @else
                                                <p class="p-product-price">R$ <span
                                                        class="product-price">{{ $productOtherCategory->price }}</span>
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
                    <a href="{{ route('product.category', 'Armadura') }}" class="link-card-product">
                        <img src='{{ asset('images-for-cards/image-for-cards-Arma física-arco.jpg') }}'>
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
                    data-carousel-target="#productsWithOtherCategory4"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span
                    class="carousel-control-next-icon show carousel-product-icon {{ count($productsWithOtherCategory4[0]) < 4 ? 'd-none' : '' }}"
                    aria-hidden="true" data-carousel-target="#productsWithOtherCategory4"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> --}}
@endsection
