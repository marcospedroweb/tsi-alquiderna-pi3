@extends('layouts.app')
@section('content')
    <div class="container-xxl">
        <div class="d-flex my-5">
            <div class="custom-breadcrumbs active" id="breadcrumb-address" data-back="false">
                <span class="custom-breadcrumb-order">1</span>
                <span class="ms-2">Endereço</span>
            </div>
            <div class="custom-breadcrumbs unavailable" id="breadcrumb-payment" data-back="false">
                <span class="custom-breadcrumb-order">2</span>
                <span class="ms-2">Pagamento</span>
            </div>
            <div class="custom-breadcrumbs unavailable" id="breadcrumb-finish" data-back="false">
                <span class="custom-breadcrumb-order">3</span>
                <span class="ms-2">Finalizar pedido</span>
            </div>
        </div>
        <div class="row justify-content-center align-items-start mb-6">
            <form class="show col-7 bg-white rounded border row me-5" id="form-address">
                <h2 class="h2">Endereço de entrega</h2>
                <div class="col-4 mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="input-payment-cep" placeholder="XXXXX-XXX" required>
                </div>
                <div class="col-8 mb-3">
                    <label for="name" class="form-label">Nome do destinatário</label>
                    <input type="text" class="form-control" id="name" placeholder="Nome do destinatário" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="street" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" id="street" placeholder="Ex: Nome da rua" required>
                </div>
                <div class="col-3 mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input type="text" class="form-control" id="number" placeholder="Ex: 502" required>
                </div>
                <div class="col-3 mb-3">
                    <label for="complement" class="form-label">Coplemento</label>
                    <input type="text" class="form-control" id="complement" placeholder="Ex: b" required>
                </div>
                <div class="col-11 text-center py-4">
                    <button type="submit" class="btn btn-primary">Confirmar endereço</button>
                </div>
            </form>
            <form class="d-none col-7 bg-white rounded border row me-5" id="form-payment">
                <h2 class="h2 mb-4">Pagamento</h2>
                <h3 class="h3">Seleciona o tipo do pagamento</h3>
                <div class="col-10 mb-3">
                    <select class="form-select mx-auto" id="select-payment" required>
                        <option disabled>Seleciona o tipo do pagamento</option>
                        <option value="boleto">Boleto</option>
                        <option value="pix">Pix</option>
                        <option value="cartao">Cartão de credito</option>
                    </select>
                </div>
                <div class="d-none col-10 row flex-column justify-content-center align-items-center" id="div-payment-card">
                    <h4 class="h4 mt-3">Adicione os dados</h4>
                    <div class="col mb-2">
                        <label for="name_card" class="form-label">Nome impresso no cartão</label>
                        <input type="text" class="form-control" id="name_card">
                    </div>
                    <div class="col mb-2">
                        <label for="number_card" class="form-label">Número impresso no cartão</label>
                        <input type="text" class="form-control" id="number_card" maxlength="18">
                    </div>
                    <div class="col mb-2">
                        <label for="date_card" class="form-label">Data de expiração</label>
                        <input type="date" class="form-control" id="date_card">
                    </div>
                    <div class="col mb-2">
                        <label for="code_card" class="form-label">Codigo CVC</label>
                        <input type="text" class="form-control" id="code_card" minlength="3" maxlength="3">
                    </div>
                </div>
                <div class="col-10 text-center py-4">
                    <button type="submit" class="btn btn-primary">Confirmar forma de pagamento</button>
                </div>
            </form>
            <form class="d-none col-7 bg-white rounded border row me-5" id="form-confirm">
                <h2 class="h2 mb-4">Finalizando pedido</h2>
                <h3 class="h3">Produto(s)</h3>
                <div class="mb-4">
                    @foreach ($items as $item)
                        <div class="d-flex justify-content-start align-items-center mb-3 border">
                            <img src="{{ asset($item->Product->image) }}" class="rounded" alt="">
                            <div class="ms-3">
                                <h4 class="h4">{{ $item->Product->name }}</h4>
                                <p>{{ $item->Product->Category->name }} {{ $item->Product->ItemClass->name }}, nível
                                    {{ $item->level }}
                                </p>
                                <p>Unidades: {{ $item->units }}</p>
                                <div class="attributes d-flex justify-content-between align-items-center">
                                    @if ($item->Product->Category->name === 'Armadura')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $item->enchant_life != 0 ? $item->enchant_life : $item->Product->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $item->enchant_speed != 0 ? $item->enchant_speed : $item->Product->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span>{{ $item->enchant_physical_protection != 0 ? $item->enchant_physical_protection : $item->Product->physical_protection }}</span>
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
                                            <span>{{ $item->enchant_magic_protection != 0 ? $item->enchant_magic_protection : $item->Product->magic_protection }}</span>
                                        </div>
                                    @elseif($item->Product->Category->name === 'Poção' && $item->Product->ItemClass->name === 'vida')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $item->enchant_life != 0 ? $item->enchant_life : $item->Product->life }}</span>
                                        </div>
                                    @elseif($item->Product->Category->name === 'Poção' && $item->Product->ItemClass->name === 'força')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-shield-slash-fill"></i>
                                            <span>{{ $item->enchant_physical_attack != 0 ? $item->enchant_physical_attack : $item->Product->physical_attack }}</span>
                                        </div>
                                    @elseif($item->Product->Category->name === 'Poção' && $item->Product->ItemClass->name === 'mana')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $item->enchant_mana != 0 ? $item->enchant_mana : $item->Product->mana }}</span>
                                        </div>
                                    @elseif($item->Product->Category->name === 'Poção' && $item->Product->ItemClass->name === 'agilidade')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $item->enchant_speed != 0 ? $item->enchant_speed : $item->Product->speed }}</span>
                                        </div>
                                    @elseif($item->Product->Category->name === 'Poção' && $item->Product->ItemClass->name === 'kit')
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="bi bi-heart-fill"></i>
                                            <span>{{ $item->enchant_life != 0 ? $item->enchant_life : $item->Product->life }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-person-running"></i>
                                            <span>{{ $item->enchant_speed != 0 ? $item->enchant_speed : $item->Product->speed }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $item->enchant_mana != 0 ? $item->enchant_mana : $item->Product->mana }}</span>
                                        </div>
                                    @else
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-user-slash"></i>
                                            <span>{{ $item->enchant_physical_attack != 0 ? $item->enchant_physical_attack : $item->Product->physical_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-wand-sparkles"></i>
                                            <span>{{ $item->magic_attack }}</span>
                                        </div>
                                        <div class="attribute d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-droplet"></i>
                                            <span>{{ $item->enchant_mana != 0 ? $item->enchant_mana : $item->Product->mana }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="border mb-4">
                    <h3 class="h3">Endereço</h3>
                    <div class="d-flex justify-content-start aling-items-start">
                        <div class="d-flex flex-column">
                            <div>
                                <h4 class="h4">Endereço de entrega</h4>
                                <p id="street-finish">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                                <h4 class="h4">Destinatário</h4>
                                <p id="name-finish">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column ms-4">
                            <div>
                                <h4 class="h4">Numero</h4>
                                <p id="number-finish">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                                <h4 class="h4">Complemento</h4>
                                <p id="complement-finish">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                                <h4 class="h4">CEP</h4>
                                <p id="cep-finish">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border">
                    <h3 class="h3 mt-5">Pagamento</h3>
                    <div class="d-flex justify-content-start align-items-center">
                        <div>
                            <h4 class="h4">Forma de pagamento</h4>
                            <p id="payment-finish">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="d-none ms-4" id="div-end-card">
                            <h4 class="h4">Cartão</h4>
                            <p>Final <span id="number-card">0000</span></p>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Finalizar pedido</button>
                </div>
                <input type="hidden" name="cep">
                <input type="hidden" name="name">
                <input type="hidden" name="street">
                <input type="hidden" name="number">
                <input type="hidden" name="complement">
                <input type="hidden" name="payment_type">
                <input type="hidden" name="number_card">
                {{-- <input type="hidden" name="number_card"> --}}
            </form>
            <div class="col-4 bg-description p-4 rounded sticky-top" id="div-order-total-payment">
                <h2 class="h3 fw-bold">Compra em processo</h2>
                <p class="d-flex flex-column border-top border-bottom" id="div-total-products">
                    @foreach ($items as $item)
                        <span class="d-flex justify-content-between align-items-center mb-1">
                            <span>{{ $item->Product->name }}</span>
                            <span>R$ <span class="product-price d-inline-block text-end"
                                    style="min-width: 46px;">{{ $item->product_total_price }}</span></span>
                        </span>
                    @endforeach
                </p>
                <p class="d-flex justify-content-between align-items-center fw-bold">
                    <span>Total</span>
                    <span>R$ <span class="product-price">{{ $total }}</span></span>
                </p>
            </div>
        </div>
    </div>
@endsection
