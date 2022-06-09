@extends('layouts.app')
@section('content')
    <section class="bg-white sticky-top py-2" id="section-info">
        <div class="container-xxl ">
            <div class="row justify-content-between align-items-center" id="product-sticky-banner">
                <div class="col-8">
                    <h2 class="h2 m-0">{{ $mainProduct->name }}</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center" id="product-nav">
                    <a href="#section-desc" class="link-primary me-2">Descrição</a>
                    <a href="#section-attributes" class="link-primary me-3">Atributos</a>
                    <a href="#main-form-buy" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl mt-4 mb-6">
        <div class="row justify-content-center align-items-start">
            <div class="col-6 overflow-hidden sticky-top" id="main-product-image">
                <img src="{{ asset($mainProduct->image) }}" class="rounded" alt="imagem do produto">
            </div>
            <form action="{{ route('cart.store', $mainProduct->id) }}" method="POST" class="col-6 bg-white rounded"
                id="main-form-buy">
                @csrf
                <div class="py-3">
                    <h3 class="h3 mb-5 text-center">
                        Compre {{ $mainProduct->name }}
                    </h3>
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
                            <p>Entrega para <span class="fw-bold" id="street">Rua com algum nome completo aqui</span>
                            </p>
                            <div id="div-cep-options">
                                <div class="option-cep">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>
                                        <span><span>Receba até</span> <span class="cep-date fw-normal">00 de
                                                dezembro</span></span>
                                        <span class="cep-price">R$ 999,99</span>
                                    </p>
                                </div>
                                <div class="option-cep">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>
                                        <span><span>Receba até</span> <span class="cep-date fw-normal">00 de
                                                dezembro</span></span>
                                        <span class="cep-price">R$ 999,99</span>
                                    </p>
                                </div>
                                <div class="option-cep">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>
                                        <span><span>Receba até</span> <span class="cep-date fw-normal">00 de
                                                dezembro</span></span>
                                        <span class="cep-price">R$ 999,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!Auth::check())
                        <div class="mb-5 border">
                            <h3 class="h3">Para realizar o pedido é necessário se logar</h3>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="btn btn-primary mt-3">Fazer login</a>
                            </div>
                        </div>
                    @else
                        <div class="mb-5 border" id="lvl">
                            <h4 class="h4">Escolha o nível
                                {{ $mainProduct->Category->name === 'Grimório' ? 'do' : 'da' }}
                                {{ $mainProduct->Category->name }}
                            </h4>
                            <div class="row">
                                @if ($mainProduct->lvlMin === 0)
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-0" value="0" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-0">
                                                Nível 0
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        0</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-10" value="100" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-10">
                                                Nível 10
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        100</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-20" value="200" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-20">
                                                Nível 10
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        200</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option  mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-30" value="300" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-30">
                                                Nível 30
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        300</span></span>
                                            </label>
                                        </div>
                                    </div>
                                @elseif($mainProduct->lvlMin === 31)
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-31" value="0" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-31">
                                                Nível 31
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        0</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-40" value="200" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-40">
                                                Nível 40
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        200</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-50" value="400" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-50">
                                                Nível 50
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        400</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option  mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-60" value="600" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-60">
                                                Nível 60
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        600</span></span>
                                            </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-61" value="0" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-61">
                                                Nível 61
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        0</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-70" value="300" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-70">
                                                Nível 70
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        300</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option ">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-80" value="600" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-80">
                                                Nível 80
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        600</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option  mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-90" value="900" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-90">
                                                Nível 90
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        900</span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 lvl-min-option  mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio" name="durability"
                                                id="option-lvl-100" value="1200" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-lvl-100">
                                                Nível 100
                                                <span>{{ $mainProduct->durability }} <span class="durability-upgrade">+
                                                        1200</span></span>
                                            </label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <input type="hidden" name="lvl_selected">
                            <small class="d-inline-block mt-2">A durabilidade
                                {{ $mainProduct->Category->name === 'Grimório' ? 'do' : 'da' }}
                                {{ $mainProduct->Category->name }} será afetada pelo nível</small>
                        </div>
                        <div class="mb-5 border {{ $mainProduct->enchant == 0 ? 'd-none' : '' }}" id="enchant">
                            <h4 class="h4">Encantar produto?</h4>
                            <div class="row flex-column justify-content-center align-items-center">
                                <div class="col-12">
                                    <select class="form-select" name="enchant" id="enchant-select" aria-label="encantar"
                                        required>
                                        <option disabled>Encantar produto?</option>
                                        <option value="0" selected>Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="col-11 d-none mt-4" id="div-enchant-types">
                                    <h5 class="h5 text-center m-0">Encantamentos diponiveis</h5>
                                    <div class="d-flex justify-content-center align-items-start">
                                        @if ($mainProduct->Category->name === 'Armadura')
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox" name="life"
                                                    value="300" id="enchant-checkbox-life">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-life">
                                                    Vida
                                                    <span class="d-none">+ 300</span>
                                                </label>
                                            </div>
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox" name="speed"
                                                    value="30" id="enchant-checkbox-speed">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-speed">
                                                    Agilidade
                                                    <span class="d-none">+ 30</span>
                                                </label>
                                            </div>
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox"
                                                    name="physical_protection" value="150"
                                                    id="enchant-checkbox-physical-protection">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-physical-protection">
                                                    Proteção física
                                                    <span class="d-none">+ 150</span>
                                                </label>
                                            </div>
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox"
                                                    name="magic_protection" value="150"
                                                    id="enchant-checkbox-magic-protection">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-magic-protection">
                                                    Proteção mágica
                                                    <span class="d-none">+ 150</span>
                                                </label>
                                            </div>
                                        @elseif($mainProduct->Category->name === 'Poção')
                                            @if ($mainProduct->ItemClass->name === 'Vida')
                                                <div class="form-check mt-3 me-3 border">
                                                    <input class="form-check-input enchant-type" type="checkbox"
                                                        name="life" value="100" id="enchant-checkbox-life">
                                                    <label
                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                        for="enchant-checkbox-life">
                                                        Vida
                                                        <span class="d-none">+ 100</span>
                                                    </label>
                                                </div>
                                            @elseif ($mainProduct->ItemClass->name === 'mana')
                                                <div class="form-check mt-3 me-3 border">
                                                    <input class="form-check-input enchant-type" type="checkbox"
                                                        name="mana" value="200" id="enchant-checkbox-mana">
                                                    <label
                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                        for="enchant-checkbox-mana">
                                                        Mana
                                                        <span class="d-none">+ 200</span>
                                                    </label>
                                                </div>
                                            @elseif ($mainProduct->ItemClass->name === 'agilidade')
                                                <div class="form-check mt-3 me-3 border">
                                                    <input class="form-check-input enchant-type" type="checkbox"
                                                        name="speed" value="30" id="enchant-checkbox-speed">
                                                    <label
                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                        for="enchant-checkbox-speed">
                                                        Agilidade
                                                        <span class="d-none">+ 30</span>
                                                    </label>
                                                </div>
                                            @elseif ($mainProduct->ItemClass->name === 'força')
                                                <div class="form-check mt-3 me-3 border">
                                                    <input class="form-check-input enchant-type" type="checkbox"
                                                        name="strength" value="50" id="enchant-checkbox-physical-attack">
                                                    <label
                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                        for="enchant-checkbox-physical-attack">
                                                        Ataque física
                                                        <span class="d-none">+ 50</span>
                                                    </label>
                                                </div>
                                            @endif
                                        @else
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox"
                                                    name="physical_attack" value="100"
                                                    id="enchant-checkbox-physical-attack">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-physical-attack">
                                                    Ataque física
                                                    <span class="d-none">+ 100</span>
                                                </label>
                                            </div>
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox"
                                                    name="magic_attack" value="100" id="enchant-checkbox-magic-attack">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-magic-attack">
                                                    Ataque mágico
                                                    <span class="d-none">+ 100</span>
                                                </label>
                                            </div>
                                            <div class="form-check mt-3 me-3 border">
                                                <input class="form-check-input enchant-type" type="checkbox" name="mana"
                                                    value="100" id="enchant-checkbox-mana">
                                                <label
                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                    for="enchant-checkbox-mana">
                                                    Mana
                                                    <span class="d-none">+ 200</span>
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 border" id="breakage_guarantee">
                            <h4 class="h4">Adicionar garantia de quebra ou defeito?</h4>
                            <div class="row flex-column justify-content-center align-items-center">
                                <div class="col-12">
                                    <select class="form-select" name="breakage_guarantee" id="breakage_guarantee_select"
                                        aria-label="garantia" required>
                                        <option disabled>Adicionar garantia de quebra?</option>
                                        <option value="0" selected>Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="col-12 row d-none" id="div_breakage_guarantee_months">
                                    <input class="option-breakage_guarantee_default d-none form-check-input mx-auto"
                                        type="radio" name="breakage_guarantee_months" value="0" required checked>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="breakage_guarantee_months" id="option-breakage_guarantee_6" value="6"
                                                required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-breakage_guarantee_6">
                                                Garantia básica
                                                <span class="breakage_guarantee_upgrade">6 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="breakage_guarantee_months" id="option-breakage_guarantee_12"
                                                value="12" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-breakage_guarantee_12">
                                                Garantia extendida
                                                <span class="breakage_guarantee_upgrade">12 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="breakage_guarantee_months" id="option-breakage_guarantee_24"
                                                value="24" required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-breakage_guarantee_24">
                                                Garantia premium
                                                <span class="breakage_guarantee_upgrade">24 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 border" id="theft_guarantee">
                            <h4 class="h4">Adicionar garantia de furto ou roubo?</h4>
                            <div class="row flex-column justify-content-center align-items-center">
                                <div class="col-12">
                                    <select class="form-select" name="theft_guarantee" id="theft_guarantee_select"
                                        aria-label="garantia" required>
                                        <option disabled>Adicionar garantia de quebra?</option>
                                        <option value="0" selected>Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="col-12 row d-none" id="div_theft_guarantee_months">
                                    <input class="option-theft_guarantee_default d-none form-check-input mx-auto"
                                        type="radio" name="theft_guarantee_months" value="0" required checked>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="theft_guarantee_months" id="option-theft_guarantee_6" value="6"
                                                required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-theft_guarantee_6">
                                                Garantia básica
                                                <span class="theft_guarantee_upgrade">6 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="theft_guarantee_months" id="option-theft_guarantee_12" value="12"
                                                required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-theft_guarantee_12">
                                                Garantia extendida
                                                <span class="theft_guarantee_upgrade">12 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <div class="block-option form-check d-flex flex-column text-center p-2">
                                            <input class="form-check-input mx-auto" type="radio"
                                                name="theft_guarantee_months" id="option-theft_guarantee_24" value="24"
                                                required>
                                            <label class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                for="option-theft_guarantee_24">
                                                Garantia premium
                                                <span class="theft_guarantee_upgrade">24 meses</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="p-4 rounded" id="purchase-description">
                                <h4 class="h4 fw-bold text-center">Descrição da compra</h4>
                                <ul class="list-unstyled pt-0">
                                    <li class="d-flex justify-content-start align-items-start mt-2 p-0 purchase-description-option"
                                        id="item-default-price">
                                        <i class="fa-solid fa-money-bill"></i>
                                        <span
                                            class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                            <span class="purchase-title">Preço padrão</span>
                                            <span class="ms-auto d-flex flex-column">
                                                @if ($mainProduct->discount_price !== 0.0)
                                                    <span class="purchase-price text-decoration-line-through"
                                                        style="font-size:.90rem;font-weight:500;">R$ <span
                                                            class="product-price"
                                                            style="min-width: 41px;">{{ $mainProduct->price }}</span></span>
                                                    <span class="purchase-price">R$ <span
                                                            class="d-inline-block product-price only-price"
                                                            style="min-width: 41px">{{ $mainProduct->discount_price }}</span></span>
                                                @else
                                                    <span class="purchase-price">R$ <span
                                                            class="d-inline-block product-price only-price"
                                                            style="min-width: 41px">{{ $mainProduct->price }}</span></span>
                                                @endif
                                            </span>
                                        </span>
                                    </li>
                                    <li class="d-none d-flex justify-content-start align-items-start mt-2 p-0 position-relative purchase-description-option"
                                        id="item-durability">
                                        <i class="fa-solid fa-bars-progress"></i>
                                        <span
                                            class="purchase-description-info d-flex justify-content-start align-items-center flex-grow-1">
                                            <span class="purchase-title" style="min-width: 132px">
                                                Durabildade</span>
                                            <ul class="purchase-list-info" style="min-width: 124px">
                                                <li>Nível <span>100</span></li>
                                            </ul>
                                            <span class="ms-auto">
                                                <span class="purchase-price">R$ <span
                                                        class="d-inline-block product-price only-price"
                                                        style="min-width: 41px">0</span></span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="d-none d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                        id="item-enchants">
                                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                                        <span
                                            class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                            <span class="purchase-title" style="min-width: 132px">
                                                Encantamento</span>
                                            <ul class="purchase-list-info" style="min-width: 124px">
                                                @if ($mainProduct->Category->name === 'Armadura')
                                                    <li class="d-none" data-enchant-name="life">Vida</li>
                                                    <li class="d-none" data-enchant-name="speed">Agilidade</li>
                                                    <li class="d-none" data-enchant-name="physical_protection">
                                                        Proteção
                                                        física</li>
                                                    <li class="d-none" data-enchant-name="magic_protection">
                                                        Proteção
                                                        mágica</li>
                                                @elseif ($mainProduct->Category->name === 'Poção')
                                                    @if ($mainProduct->itemClass->name === 'vida')
                                                        <li class="d-none" data-enchant-name="life">Vida</li>
                                                    @elseif($mainProduct->itemClass->name === 'mana')
                                                        <li class="d-none" data-enchant-name="mana">Mana</li>
                                                    @elseif($mainProduct->itemClass->name === 'agilidade')
                                                        <li class="d-none" data-enchant-name="speed">Agilidade</li>
                                                    @elseif($mainProduct->itemClass->name === 'força')
                                                        <li class="d-none" data-enchant-name="strength">Ataque
                                                            físico
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="d-none" data-enchant-name="physical_attack">Ataque
                                                        físico</li>
                                                    <li class="d-none" data-enchant-name="magic_attack">Ataque
                                                        mágico
                                                    </li>
                                                    <li class="d-none" data-enchant-name="mana">Mana</li>
                                                @endif
                                            </ul>
                                            <span class="ms-auto">
                                                <span class="purchase-price">R$ <span
                                                        class="d-inline-block product-price only-price"
                                                        style="min-width: 41px">0</span></span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="d-none d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                        id="item-guarantee">
                                        <i class="fa-solid fa-certificate"></i>
                                        <span
                                            class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                            <span class="purchase-title" style="min-width: 132px">
                                                Garantia</span>
                                            <ul class="purchase-list-info" style="min-width: 124px">
                                                <li class="d-none" id="li-breakage_guarantee_months">Quebra</li>
                                                <li class="d-none" id="li-theft_guarantee_months">Furto ou roubo
                                                </li>
                                            </ul>
                                            <span class="ms-auto">
                                                <span class="purchase-price">R$ <span
                                                        class="d-inline-block product-price only-price"
                                                        style="min-width: 41px">0</span></span>
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-10 d-flex justify-content-between align-items-center">
                                        <h5 class="h5 m-0" id="purchase-total-title">Total</h5>
                                        @if ($mainProduct->discount_price !== 0.0)
                                            <p class="m-0" id="purchase-total-price">R$ <span
                                                    class="product-price">{{ $mainProduct->discount_price }}</span></p>
                                        @else
                                            <p class="m-0" id="purchase-total-price">R$ <span
                                                    class="product-price">{{ $mainProduct->price }}</span></p>
                                        @endif
                                    </div>
                                </div>
                                @if ($mainProduct->discount_price !== 0.0)
                                    <input type="hidden" name="product_total_price"
                                        value="{{ $mainProduct->discount_price }}">
                                    <input type="hidden" value="{{ $mainProduct->discount_price }}"
                                        name="product_default_price">
                                @else
                                    <input type="hidden" name="product_total_price" value="{{ $mainProduct->price }}">
                                    <input type="hidden" value="{{ $mainProduct->price }}" name="product_default_price">
                                @endif
                                <input type="hidden" name="product_lvl_price">
                                <input type="hidden" name="product_enchant_price">
                                <input type="hidden" name="product_breakage_guarantee_price" value="0">
                                <input type="hidden" name="product_theft_guarantee_price" value="0">
                            </div>
                        </div>
                        <div class="p-4 row flex-column justify-content-center align-items-center">
                            <button type="submit" class="col-12 btn btn-primary mb-4">Continuar compra</button>
                            <div class="col-12 py-2 rounded" id="mark-product">
                                <h4>Ainda decidindo?</h4>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="m-0 me-4">Adicione esse produto a sua lista de desejos e você poderá
                                        voltar
                                        para ve-lô denovo</p>
                                    <div id="marks">
                                        <i class="fa-regular fa-bookmark"></i>
                                        <i class="d-none fa-solid fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </section>
    <section class="container-xxl mb-6 rounded" id="section-desc">
        <div class="row justify-content-between align-items-start p-3 py-4 position-relative">
            <div class="col-6">
                <h3 class="h3">Descrição do produto</h3>
                <p>{{ $mainProduct->description }}</p>
            </div>
            <span class="separator position-absolute top-50 start-50 translate-middle"></span>
            <div class="col-6">
                <h3 class="h3 mb-4">{{ $mainProduct->name }}</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Encantamento</h4>
                            @if ($mainProduct->enchant === 1)
                                <p>Disponível</p>
                            @else
                                <p>ndisponível</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Níveis</h4>
                            @if ($mainProduct->lvlMin === 0)
                                <p>Níveis 0 a 30</p>
                            @elseif ($mainProduct->lvlMin === 31)
                                <p>Níveis 31 a 60</p>
                            @else
                                <p>Níveis 61 a 100</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Promoção</h4>
                            @if ($mainProduct->discount_price !== 0.0)
                                <p>Sim</p>
                            @else
                                <p>Não</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Categoria</h4>
                            <p>{{ $mainProduct->Category->name }}</p>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Classe</h4>
                            <p class="item-class-name">{{ $mainProduct->ItemClass->name }}</p>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div class="block-option text-center p-2">
                            <h4 class="h4 fw-bold">Recomendação</h4>
                            @if ($mainProduct->recommendation === 'ini')
                                <p>Recomendado para aventureiros iniciantes</p>
                            @elseif ($mainProduct->recommendation === 'int')
                                <p>Recomendado para aventureiros intermediários</p>
                            @else
                                <p>Recomendado para aventureiros avançados</p>
                            @endif
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl mb-6" id="section-attributes">
        <div class="row justify-content-center align-items-start p-3 py-4 position-relative">
            <h3 class="col-12 h3 ps-0 ms-4">Atributos</h3>
            <div class="col-6 justify-content-center align-items-start">
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="bi bi-heart-fill"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->life }}</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="fa-solid fa-person-running"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->speed }}</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="bi bi-shield-slash-fill"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->physical_protection }}</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon">
                            <span class="material-symbols-outlined">
                                shield_moon
                            </span>
                        </span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->magic_protection }}</span>
                    </li>
                </ul>
            </div>
            <div class="col-6 justify-content-center align-items-start">
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="fa-solid fa-user-slash"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->physical_attack }}</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="fa-solid fa-wand-sparkles"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->magic_attack }}</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center border p-2">
                        <span class="attribute-icon"><i class="fa-solid fa-droplet"></i></span>
                        <span class="attribute-value flex-grow-1">{{ $mainProduct->mana }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-xxl mb-6 d-none" id="avaliation">
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
    <section class="container-xxl mb-6">
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
                                                    <span
                                                        class="product-price">{{ $productSameCategory->price }}</span>
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
                            <span class="h2 text-white fw-normal">Ver mais <span
                                    class="fw-bold">arcos</span></span>
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
                                    <p><span
                                            class="product-category">{{ $productOtherCategory->Category->name }}</span>
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
    </section>
@endsection
