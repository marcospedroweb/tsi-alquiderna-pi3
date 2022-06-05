@extends('layouts.app')
@section('content')
    <div class="container-xxl">
        <div class="d-flex my-5">
            <div class="custom-breadcrumbs" id="breadcrumb-address">
                <span class="ms-2 custom-breadcrumb-order">1</span>
                <span>Endereço</span>
            </div>
            <div class="custom-breadcrumbs" id="breadcrumb-payment">
                <span class="ms-2 custom-breadcrumb-order">2</span>
                <span>Pagamento</span>
            </div>
            <div class="custom-breadcrumbs" id="breadcrumb-finish">
                <span class="ms-2 custom-breadcrumb-order">3</span>
                <span>Finalizar pedido</span>
            </div>
        </div>
        <div class="row justify-content-center align-items-start">
            <div class="col-8">
                <h2>Endereço de entrega</h2>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do destinatário</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do destinatário">
                </div>
                <div class="mb-3">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro"
                        placeholder="Nome da rua ou avenida">
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" id="input-cep" placeholder="XXXXX-XXX">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="55">
                </div>
                <div class="mb-3">
                    <label for="complemento" class="form-label">Coplemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="D">
                </div>
            </div>
            <div class="col-4 bg-description p-4 rounded sticky-top" id="div-order-total">
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
                <a href="" class="btn btn-primary w-100 text-uppercase fw-bold">Ir para pagamento</a>
            </div>
        </div>
    </div>
@endsection
