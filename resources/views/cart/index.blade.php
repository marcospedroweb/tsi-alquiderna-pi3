@extends('layouts.app')
@section('content')
    <div class="container-xxl mt-5">
        <h2>Minha cesta</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <th scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Detalhes</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="div-product-info">
                                    <div class="d-flex justify-content-start align-items-center" id="cart-product-info">
                                        <img src="{{ asset($item->Product->image) }}" alt="Imagem do produto">
                                        <div class="ms-3">
                                            <h3>{{ $item->Product->name }}</h3>
                                            <p>{{ $item->Product->Category->name }}
                                                {{ $item->Product->ItemClass->name }}, nível {{ $item->level }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="div-product-units">
                                    <form action="{{ route('cart.update.unit', $item->id) }}" method="POST"
                                        class="d-flex justify-content-center align-items-center border mt-3 mx-3" id="units">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <button type="submit" name="value" value="minus"
                                                class="btn {{ App\Models\Cart::NumberOfProductsInCart($item->id) == 1 ? 'd-none' : '' }}">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="div-input-units">
                                            <input type="text" name="units"
                                                value="{{ App\Models\Cart::NumberOfProductsInCart($item->id) }}"
                                                maxlength="2" minlength="1" disabled>
                                        </div>
                                        <div>
                                            <button type="submit" name="value" value="plus" class="btn">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td class="div-product-price">
                                    <div class="mt-4" id="cart-product-price">
                                        <p>R$ <span class="product-price">{{ $item->product_total_price }}</span></p>
                                    </div>
                                </td>
                                <td class="div-product-price">
                                    <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal"
                                        data-bs-target="#modal-product-{{ $item->id }}">
                                        Ver detalhes
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-product-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="modal-product-{{ $item->id }}-Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"
                                                        id="modal-product-{{ $item->id }}-Label">Detalhes do
                                                        produto
                                                    </h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="purchase-description-view">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-4 my-3">
                                                            <div class="block-option text-center p-2">
                                                                <h5 class="h5 model-title">Encamento</h5>
                                                                @if ($item->enchant)
                                                                    <p class="product-upgraded">Produto encantado</p>
                                                                @else
                                                                    <p class="product-not-upgraded">Produto não encantado
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-4 my-3">
                                                            <div class="block-option text-center p-2">
                                                                <h5 class="h5 model-title">Garantia de quebra</h5>
                                                                @if ($item->breakage_guarantee)
                                                                    <p class="product-upgraded">Garantia adquirida</p>
                                                                @else
                                                                    <p class="product-not-upgraded">Garantia não adquirida
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-4 my-3">
                                                            <div class="block-option text-center p-2">
                                                                <h5 class="h5 model-title">Garantia de furto e roubo</h5>
                                                                @if ($item->theft_guarantee)
                                                                    <p class="product-upgraded">Garantia adquirida</p>
                                                                @else
                                                                    <p class="product-not-upgraded">Garantia não adquirida
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-unstyled border">
                                                        <li class="d-flex justify-content-start align-items-start mt-2 p-0 purchase-description-option"
                                                            id="item-default-price">
                                                            <i class="fa-solid fa-money-bill"></i>
                                                            <span
                                                                class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                <span class="purchase-title">Preço padrão</span>
                                                                <span class="ms-auto d-flex flex-column">
                                                                    @if ($item->Product->discount_price !== 0.0)
                                                                        <span
                                                                            class="purchase-price text-decoration-line-through"
                                                                            style="font-size:.90rem;font-weight:500;">R$
                                                                            <span class="product-price"
                                                                                style="min-width: 41px;">{{ $item->Product->price }}</span></span>
                                                                        <span class="purchase-price">R$ <span
                                                                                class="d-inline-block product-price only-price"
                                                                                style="min-width: 41px">{{ $item->Product->discount_price }}</span></span>
                                                                    @else
                                                                        <span class="purchase-price">R$ <span
                                                                                class="d-inline-block product-price only-price"
                                                                                style="min-width: 41px">{{ $item->Product->price }}</span></span>
                                                                    @endif
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li class="d-flex justify-content-start align-items-start mt-2 p-0 position-relative purchase-description-option"
                                                            id="item-durability-view">
                                                            <i class="fa-solid fa-bars-progress"></i>
                                                            <span
                                                                class="purchase-description-info d-flex justify-content-start align-items-center flex-grow-1">
                                                                <span class="purchase-title" style="min-width: 132px">
                                                                    Durabildade</span>
                                                                <ul class="purchase-list-info" style="min-width: 124px">
                                                                    <li>Nível <span>{{ $item->level }}</span></li>
                                                                </ul>
                                                                <span class="ms-auto">
                                                                    <span class="purchase-price">R$ <span
                                                                            class="d-inline-block product-price only-price"
                                                                            style="min-width: 41px">{{ $item->product_lvl_price }}</span></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li class="d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                                            id="item-enchants-view">
                                                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                                                            <span
                                                                class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                <span class="purchase-title" style="min-width: 132px">
                                                                    Encantamento</span>
                                                                <ul class="purchase-list-info" style="min-width: 124px">
                                                                    @if ($item->Product->Category->name === 'Armadura')
                                                                        <li class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="life">
                                                                            Vida
                                                                        </li>
                                                                        <li class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="speed">
                                                                            Agilidade</li>
                                                                        <li class="{{ $item->enchant_physical_protection !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="physical_protection">Proteção
                                                                            física</li>
                                                                        <li class="{{ $item->enchant_magic_protection !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="magic_protection">Proteção
                                                                            mágica</li>
                                                                    @elseif ($item->Product->Category->name === 'Poção')
                                                                        @if ($item->Product->itemClass->name === 'vida')
                                                                            <li class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}"
                                                                                data-enchant-name="life">
                                                                                Vida</li>
                                                                        @elseif($item->Product->itemClass->name === 'mana')
                                                                            <li class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}"
                                                                                data-enchant-name="mana">
                                                                                Mana</li>
                                                                        @elseif($item->Product->itemClass->name === 'agilidade')
                                                                            <li class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}"
                                                                                data-enchant-name="speed">Agilidade</li>
                                                                        @elseif($item->Product->itemClass->name === 'força')
                                                                            <li class="{{ $item->enchant_strength !== 0 ? '' : 'd-none' }}"
                                                                                data-enchant-name="strength">Ataque físico
                                                                            </li>
                                                                        @endif
                                                                    @else
                                                                        <li class="{{ $item->enchant_physical_attack !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="physical_attack">Ataque
                                                                            físico</li>
                                                                        <li class="{{ $item->enchant_magic_attack !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="magic_attack">Ataque mágico
                                                                        </li>
                                                                        <li class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}"
                                                                            data-enchant-name="mana">
                                                                            Mana
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                                <span class="ms-auto">
                                                                    <span class="purchase-price">R$ <span
                                                                            class="d-inline-block product-price only-price"
                                                                            style="min-width: 41px">{{ $item->product_enchant_price }}</span></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li class="d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                                            id="item-guarantee-view">
                                                            <i class="fa-solid fa-certificate"></i>
                                                            <span
                                                                class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                <span class="purchase-title" style="min-width: 132px">
                                                                    Garantia</span>
                                                                <ul class="purchase-list-info" style="min-width: 124px">
                                                                    <li class="{{ $item->breakage_guarantee_months !== 0 ? '' : 'd-none' }}"
                                                                        id="li-breakage_guarantee_months">Quebra</li>
                                                                    <li class="{{ $item->theft_guarantee_months !== 0 ? '' : 'd-none' }}"
                                                                        id="li-theft_guarantee_months">
                                                                        Furto ou roubo</li>
                                                                </ul>
                                                                <span class="ms-auto">
                                                                    <span class="purchase-price">R$ <span
                                                                            class="d-inline-block product-price only-price"
                                                                            style="min-width: 41px">{{ $item->product_breakage_price + $item->product_theft_price }}</span></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="row justify-content-center align-items-center">
                                                        <div
                                                            class="col-10 d-flex justify-content-between align-items-center">
                                                            <h5 class="h5 m-0" id="purchase-total-title">Total</h5>
                                                            <p class="m-0 fw-bold" id="purchase-total-price-preview">R$
                                                                <span
                                                                    class="product-price">{{ $item->product_total_price }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Fechar</button>
                                                    <!-- Button modal edit-->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#modal-edit-product-{{ $item->id }}">
                                                        Editar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="modal-edit-product-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="modal-edit-product-{{ $item->id }}-Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <form action="{{ route('cart.update', $item->id) }}" method="POST"
                                                class="modal-content">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h4 class="modal-title"
                                                        id="modal-edit-product-{{ $item->id }}-Label">
                                                        Editando {{ $item->Product->name }}</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body rounded" id="main-form-buy">
                                                    <div class="mb-5 border" id="lvl">
                                                        <h4 class="h4">Escolha o nível
                                                            {{ $item->Product->Category->name === 'Grimório' ? 'do' : 'da' }}
                                                            {{ $item->Product->Category->name }}
                                                        </h4>
                                                        <div class="row">
                                                            @if ($item->Product->lvlMin === 0)
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability" id="option-lvl-0"
                                                                            value="0" required
                                                                            {{ $item->level === 0 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-0">
                                                                            Nível 0
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    0</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-10" value="100" required
                                                                            {{ $item->level === 10 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-10">
                                                                            Nível 10
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    100</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-20" value="200" required
                                                                            {{ $item->level === 20 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-20">
                                                                            Nível 10
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    200</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option  mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-30" value="300" required
                                                                            {{ $item->level === 30 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-30">
                                                                            Nível 30
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    300</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @elseif($item->Product->lvlMin === 31)
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-31" value="0" required
                                                                            {{ $item->level === 31 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-31">
                                                                            Nível 31
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    0</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-40" value="200" required
                                                                            {{ $item->level === 40 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-40">
                                                                            Nível 40
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    200</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-50" value="400" required
                                                                            {{ $item->level === 50 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-50">
                                                                            Nível 50
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    400</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option  mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-60" value="600" required
                                                                            {{ $item->level === 60 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-60">
                                                                            Nível 60
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    600</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-61" value="0" required
                                                                            {{ $item->level === 61 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-61">
                                                                            Nível 61
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    0</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-70" value="300" required
                                                                            {{ $item->level === 70 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-70">
                                                                            Nível 70
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    300</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option ">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-80" value="600" required
                                                                            {{ $item->level === 80 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-80">
                                                                            Nível 80
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    600</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option  mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-90" value="900" required
                                                                            {{ $item->level === 90 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-90">
                                                                            Nível 90
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    900</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 lvl-min-option  mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="durability"
                                                                            id="option-lvl-100" value="1200" required
                                                                            {{ $item->level === 100 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-lvl-100">
                                                                            Nível 100
                                                                            <span>{{ $item->Product->durability }}
                                                                                <span class="durability-upgrade">+
                                                                                    1200</span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <input type="hidden" name="lvl_selected"
                                                            value="{{ $item->level }}">
                                                        <small class="d-inline-block mt-2">A durabilidade
                                                            {{ $item->Product->Category->name === 'Grimório' ? 'do' : 'da' }}
                                                            {{ $item->Product->Category->name }} será afetada
                                                            pelo
                                                            nível</small>
                                                    </div>
                                                    @if ($item->Product->enchant)
                                                        <div class="mb-5 border" id="enchant">
                                                            <h4 class="h4">Encantar produto?</h4>
                                                            <div
                                                                class="row flex-column justify-content-center align-items-center">
                                                                <div class="col-12">
                                                                    <select class="form-select" name="enchant"
                                                                        id="enchant-select" aria-label="encantar" required>
                                                                        <option disabled>Encantar produto?</option>
                                                                        <option value="0"
                                                                            {{ $item->enchant === 0 ? 'selected' : '' }}>
                                                                            Não</option>
                                                                        <option value="1"
                                                                            {{ $item->enchant === 1 ? 'selected' : '' }}>
                                                                            Sim</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-11 {{ $item->enchant === 1 ? '' : 'd-none' }} mt-4"
                                                                    id="div-enchant-types">
                                                                    <h5 class="h5 text-center m-0">Encantamentos
                                                                        diponiveis</h5>
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-start">
                                                                        @if ($item->Product->Category->name === 'Armadura')
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="life" value="300"
                                                                                    id="enchant-checkbox-life"
                                                                                    {{ $item->enchant_life !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-life">
                                                                                    Vida
                                                                                    <span
                                                                                        class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}">+
                                                                                        300</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="speed" value="30"
                                                                                    id="enchant-checkbox-speed"
                                                                                    {{ $item->enchant_speed !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-speed">
                                                                                    Agilidade
                                                                                    <span
                                                                                        class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}">+
                                                                                        30</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox"
                                                                                    name="physical_protection" value="150"
                                                                                    id="enchant-checkbox-physical-protection"
                                                                                    {{ $item->enchant_physical_protection !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-physical-protection">
                                                                                    Proteção física
                                                                                    <span
                                                                                        class="{{ $item->enchant_physical_protection !== 0 ? '' : 'd-none' }}">+
                                                                                        150</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="magic_protection"
                                                                                    value="150"
                                                                                    id="enchant-checkbox-magic-protection"
                                                                                    {{ $item->enchant_magic_protection !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-magic-protection">
                                                                                    Proteção mágica
                                                                                    <span
                                                                                        class="{{ $item->enchant_magic_protection !== 0 ? '' : 'd-none' }}">+
                                                                                        150</span>
                                                                                </label>
                                                                            </div>
                                                                        @elseif($item->Product->Category->name === 'Poção')
                                                                            @if ($item->Product->ItemClass->name === 'Vida')
                                                                                <div class="form-check mt-3 me-3 border">
                                                                                    <input
                                                                                        class="form-check-input enchant-type"
                                                                                        type="checkbox" name="life"
                                                                                        value="100"
                                                                                        id="enchant-checkbox-life"
                                                                                        {{ $item->enchant_life !== 0 ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                        for="enchant-checkbox-life">
                                                                                        Vida
                                                                                        <span
                                                                                            class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}">+
                                                                                            100</span>
                                                                                    </label>
                                                                                </div>
                                                                            @elseif($item->Product->ItemClass->name === 'mana')
                                                                                <div class="form-check mt-3 me-3 border">
                                                                                    <input
                                                                                        class="form-check-input enchant-type"
                                                                                        type="checkbox" name="mana"
                                                                                        value="200"
                                                                                        id="enchant-checkbox-mana"
                                                                                        {{ $item->enchant_mana !== 0 ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                        for="enchant-checkbox-mana">
                                                                                        Mana
                                                                                        <span
                                                                                            class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}">+
                                                                                            200</span>
                                                                                    </label>
                                                                                </div>
                                                                            @elseif($item->Product->ItemClass->name === 'agilidade')
                                                                                <div class="form-check mt-3 me-3 border">
                                                                                    <input
                                                                                        class="form-check-input enchant-type"
                                                                                        type="checkbox" name="speed"
                                                                                        value="30"
                                                                                        id="enchant-checkbox-speed"
                                                                                        {{ $item->enchant_speed !== 0 ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                        for="enchant-checkbox-speed">
                                                                                        Agilidade
                                                                                        <span
                                                                                            class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}">+
                                                                                            30</span>
                                                                                    </label>
                                                                                </div>
                                                                            @elseif($item->Product->ItemClass->name === 'força')
                                                                                <div class="form-check mt-3 me-3 border">
                                                                                    <input
                                                                                        class="form-check-input enchant-type"
                                                                                        type="checkbox" name="strength"
                                                                                        value="50"
                                                                                        id="enchant-checkbox-physical-attack"
                                                                                        {{ $item->enchant_strength !== 0 ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                        for="enchant-checkbox-physical-attack">
                                                                                        Ataque física
                                                                                        <span
                                                                                            class="{{ $item->enchant_strength !== 0 ? '' : 'd-none' }}">+
                                                                                            50</span>
                                                                                    </label>
                                                                                </div>
                                                                            @endif
                                                                        @else
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="physical_attack"
                                                                                    value="100"
                                                                                    id="enchant-checkbox-physical-attack"
                                                                                    {{ $item->enchant_physical_attack !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-physical-attack">
                                                                                    Ataque física
                                                                                    <span
                                                                                        class="{{ $item->enchant_physical_attack !== 0 ? '' : 'd-none' }}">+
                                                                                        100</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="magic_attack"
                                                                                    value="100"
                                                                                    id="enchant-checkbox-magic-attack"
                                                                                    {{ $item->enchant_magic_attack !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-magic-attack">
                                                                                    Ataque mágico
                                                                                    <span
                                                                                        class="{{ $item->enchant_magic_attack !== 0 ? '' : 'd-none' }}">+
                                                                                        100</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3 me-3 border">
                                                                                <input
                                                                                    class="form-check-input enchant-type"
                                                                                    type="checkbox" name="mana" value="100"
                                                                                    id="enchant-checkbox-mana"
                                                                                    {{ $item->enchant_mana !== 0 ? 'checked' : '' }}>
                                                                                <label
                                                                                    class="form-check-label d-flex flex-column justify-content-between align-items-start"
                                                                                    for="enchant-checkbox-mana">
                                                                                    Mana
                                                                                    <span
                                                                                        class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}">+
                                                                                        200</span>
                                                                                </label>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="mb-5 border" id="breakage_guarantee">
                                                        <h4 class="h4">Adicionar garantia de quebra?
                                                        </h4>
                                                        <div
                                                            class="row flex-column justify-content-center align-items-center">
                                                            <div class="col-12">
                                                                <select class="form-select" name="breakage_guarantee"
                                                                    id="breakage_guarantee_select" aria-label="garantia"
                                                                    required>
                                                                    <option disabled>Adicionar garantia de quebra?
                                                                    </option>
                                                                    <option value="0"
                                                                        {{ $item->breakage_guarantee === 0 ? 'selected' : '' }}>
                                                                        Não</option>
                                                                    <option value="1"
                                                                        {{ $item->breakage_guarantee === 1 ? 'selected' : '' }}>
                                                                        Sim</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 row {{ $item->breakage_guarantee === 1 ? '' : 'd-none' }}"
                                                                id="div_breakage_guarantee_months">
                                                                <input
                                                                    class="option-breakage_guarantee_default d-none form-check-input mx-auto"
                                                                    type="radio" name="breakage_guarantee_months" value="0"
                                                                    required
                                                                    {{ $item->breakage_guarantee === 0 && $item->breakage_guarantee_months === 0 ? 'checked' : '' }}>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="breakage_guarantee_months"
                                                                            id="option-breakage_guarantee_6" value="6"
                                                                            required
                                                                            {{ $item->breakage_guarantee_months === 6 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-breakage_guarantee_6">
                                                                            Garantia básica
                                                                            <span class="breakage_guarantee_upgrade">6
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="breakage_guarantee_months"
                                                                            id="option-breakage_guarantee_12" value="12"
                                                                            required
                                                                            {{ $item->breakage_guarantee_months === 12 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-breakage_guarantee_12">
                                                                            Garantia extendida
                                                                            <span class="breakage_guarantee_upgrade">12
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="breakage_guarantee_months"
                                                                            id="option-breakage_guarantee_24" value="24"
                                                                            required
                                                                            {{ $item->breakage_guarantee_months === 24 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-breakage_guarantee_24">
                                                                            Garantia premium
                                                                            <span class="breakage_guarantee_upgrade">24
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-5 border" id="theft_guarantee">
                                                        <h4 class="h4">Adicionar garantia de furto e/ou
                                                            roubo?</h4>
                                                        <div
                                                            class="row flex-column justify-content-center align-items-center">
                                                            <div class="col-12">
                                                                <select class="form-select" name="theft_guarantee"
                                                                    id="theft_guarantee_select" aria-label="garantia"
                                                                    required>
                                                                    <option disabled>Adicionar garantia de quebra?
                                                                    </option>
                                                                    <option value="0"
                                                                        {{ $item->theft_guarantee === 0 ? 'selected' : '' }}>
                                                                        Não</option>
                                                                    <option value="1"
                                                                        {{ $item->theft_guarantee === 1 ? 'selected' : '' }}>
                                                                        Sim</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 row {{ $item->theft_guarantee === 1 ? '' : 'd-none' }}"
                                                                id="div_theft_guarantee_months">
                                                                <input
                                                                    class="option-theft_guarantee_default d-none form-check-input mx-auto"
                                                                    type="radio" name="theft_guarantee_months" value="0"
                                                                    required
                                                                    {{ $item->theft_guarantee === 0 && $item->theft_guarantee_months === 0 ? 'checked' : '' }}>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="theft_guarantee_months"
                                                                            id="option-theft_guarantee_6" value="6" required
                                                                            {{ $item->theft_guarantee_months === 6 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-theft_guarantee_6">
                                                                            Garantia básica
                                                                            <span class="theft_guarantee_upgrade">6
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="theft_guarantee_months"
                                                                            id="option-theft_guarantee_12" value="12"
                                                                            required
                                                                            {{ $item->theft_guarantee_months === 12 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-theft_guarantee_12">
                                                                            Garantia extendida
                                                                            <span class="theft_guarantee_upgrade">12
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-3">
                                                                    <div
                                                                        class="block-option form-check d-flex flex-column text-center p-2">
                                                                        <input class="form-check-input mx-auto"
                                                                            type="radio" name="theft_guarantee_months"
                                                                            id="option-theft_guarantee_24" value="24"
                                                                            required
                                                                            {{ $item->theft_guarantee_months === 24 ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label d-flex flex-column mt-3 fw-bold"
                                                                            for="option-theft_guarantee_24">
                                                                            Garantia premium
                                                                            <span class="theft_guarantee_upgrade">24
                                                                                meses</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center mb-4">
                                                        <div class="p-4 rounded" id="purchase-description">
                                                            <ul class="list-unstyled border">
                                                                <li class="d-flex justify-content-start align-items-start mt-2 p-0 purchase-description-option"
                                                                    id="item-default-price">
                                                                    <i class="fa-solid fa-money-bill"></i>
                                                                    <span
                                                                        class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                        <span class="purchase-title">Preço padrão</span>
                                                                        <span class="ms-auto d-flex flex-column">
                                                                            @if ($item->Product->discount_price !== 0.0)
                                                                                <span
                                                                                    class="purchase-price text-decoration-line-through"
                                                                                    style="font-size:.90rem;font-weight:500;">R$
                                                                                    <span class="product-price"
                                                                                        style="min-width: 41px;">{{ $item->Product->price }}</span></span>
                                                                                <span class="purchase-price">R$ <span
                                                                                        class="d-inline-block product-price only-price"
                                                                                        style="min-width: 41px">{{ $item->Product->discount_price }}</span></span>
                                                                            @else
                                                                                <span class="purchase-price">R$ <span
                                                                                        class="d-inline-block product-price only-price"
                                                                                        style="min-width: 41px">{{ $item->Product->price }}</span></span>
                                                                            @endif
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex justify-content-start align-items-start mt-2 p-0 position-relative purchase-description-option"
                                                                    id="item-durability">
                                                                    <i class="fa-solid fa-bars-progress"></i>
                                                                    <span
                                                                        class="purchase-description-info d-flex justify-content-start align-items-center flex-grow-1">
                                                                        <span class="purchase-title"
                                                                            style="min-width: 132px">
                                                                            Durabildade</span>
                                                                        <ul class="purchase-list-info"
                                                                            style="min-width: 124px">
                                                                            <li>Nível <span>{{ $item->level }}</span>
                                                                            </li>
                                                                        </ul>
                                                                        <span class="ms-auto">
                                                                            <span class="purchase-price">R$ <span
                                                                                    class="d-inline-block product-price only-price"
                                                                                    style="min-width: 41px">{{ $item->product_lvl_price }}</span></span>
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                                                    id="item-enchants">
                                                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                                                    <span
                                                                        class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                        <span class="purchase-title"
                                                                            style="min-width: 132px">
                                                                            Encantamento</span>
                                                                        <ul class="purchase-list-info"
                                                                            style="min-width: 124px">
                                                                            @if ($item->Product->Category->name === 'Armadura')
                                                                                <li class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="life">
                                                                                    Vida
                                                                                </li>
                                                                                <li class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="speed">
                                                                                    Agilidade</li>
                                                                                <li class="{{ $item->enchant_physical_protection !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="physical_protection">
                                                                                    Proteção
                                                                                    física</li>
                                                                                <li class="{{ $item->enchant_magic_protection !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="magic_protection">
                                                                                    Proteção
                                                                                    mágica</li>
                                                                            @elseif ($item->Product->Category->name === 'Poção')
                                                                                @if ($item->Product->itemClass->name === 'vida')
                                                                                    <li class="{{ $item->enchant_life !== 0 ? '' : 'd-none' }}"
                                                                                        data-enchant-name="life">
                                                                                        Vida</li>
                                                                                @elseif($item->Product->itemClass->name === 'mana')
                                                                                    <li class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}"
                                                                                        data-enchant-name="mana">
                                                                                        Mana</li>
                                                                                @elseif($item->Product->itemClass->name === 'agilidade')
                                                                                    <li class="{{ $item->enchant_speed !== 0 ? '' : 'd-none' }}"
                                                                                        data-enchant-name="speed">Agilidade
                                                                                    </li>
                                                                                @elseif($item->Product->itemClass->name === 'força')
                                                                                    <li class="{{ $item->enchant_strength !== 0 ? '' : 'd-none' }}"
                                                                                        data-enchant-name="strength">Ataque
                                                                                        físico
                                                                                    </li>
                                                                                @endif
                                                                            @else
                                                                                <li class="{{ $item->enchant_physical_attack !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="physical_attack">
                                                                                    Ataque
                                                                                    físico</li>
                                                                                <li class="{{ $item->enchant_magic_attack !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="magic_attack">Ataque
                                                                                    mágico
                                                                                </li>
                                                                                <li class="{{ $item->enchant_mana !== 0 ? '' : 'd-none' }}"
                                                                                    data-enchant-name="mana">
                                                                                    Mana
                                                                                </li>
                                                                            @endif
                                                                        </ul>
                                                                        <span class="ms-auto">
                                                                            <span class="purchase-price">R$ <span
                                                                                    class="d-inline-block product-price only-price"
                                                                                    style="min-width: 41px">{{ $item->product_enchant_price }}</span></span>
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex justify-content-start align-items-start my-2 p-0 position-relative purchase-description-option"
                                                                    id="item-guarantee">
                                                                    <i class="fa-solid fa-certificate"></i>
                                                                    <span
                                                                        class="purchase-description-info d-flex justify-content-start align-items-start flex-grow-1">
                                                                        <span class="purchase-title"
                                                                            style="min-width: 132px">
                                                                            Garantia</span>
                                                                        <ul class="purchase-list-info"
                                                                            style="min-width: 124px">
                                                                            <li class="{{ $item->breakage_guarantee_months !== 0 ? '' : 'd-none' }}"
                                                                                id="li-breakage_guarantee_months">Quebra
                                                                            </li>
                                                                            <li class="{{ $item->theft_guarantee_months !== 0 ? '' : 'd-none' }}"
                                                                                id="li-theft_guarantee_months">
                                                                                Furto ou roubo</li>
                                                                        </ul>
                                                                        <span class="ms-auto">
                                                                            <span class="purchase-price">R$ <span
                                                                                    class="d-inline-block product-price only-price"
                                                                                    style="min-width: 41px">{{ $item->product_breakage_price + $item->product_theft_price }}</span></span>
                                                                        </span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="row justify-content-center align-items-center">
                                                                <div
                                                                    class="col-10 d-flex justify-content-between align-items-center">
                                                                    <h5 class="h5 m-0" id="purchase-total-title">
                                                                        Total</h5>
                                                                    <p class="m-0" id="purchase-total-price">R$
                                                                        <span
                                                                            class="product-price">{{ $item->product_total_price }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="product_total_price"
                                                                value="{{ $item->product_total_price }}">
                                                            <input type="hidden" name="product_default_price"
                                                                value="{{ $item->Product->price }}">
                                                            <input type="hidden" name="product_lvl_price"
                                                                value="{{ $item->product_lvl_price }}">
                                                            <input type="hidden" name="product_enchant_price"
                                                                value="{{ $item->product_enchant_price }}">
                                                            <input type="hidden" name="product_breakage_guarantee_price"
                                                                value="{{ $item->product_breakage_price }}">
                                                            <input type="hidden" name="product_theft_guarantee_price"
                                                                value="{{ $item->product_theft_price }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Salvar
                                                        alterações</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
@endsection
