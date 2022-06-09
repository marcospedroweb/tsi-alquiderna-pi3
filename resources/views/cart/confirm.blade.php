@extends('layouts.app')
@section('content')
    <section class="container-xxl d-flex justify-content-center align-items-center mt-5 mb-6">
        <div class="bg-white p-4 col-5 text-center">
            <h2>Compra realizada com sucesso</h2>
            <p>Número do pedido: <span class="fw-bold">{{ $order_number }}</span></p>
            @if ($payment_type == 'cartao')
                <div class="mt-3">
                    <p>Formato do pagamento: <span class="fw-bold">Cartão de credito</span></p>
                </div>
            @else
                <div class="mt-3">
                    <p>Formato do pagamento: <span
                            class="fw-bold">{{ $payment_type == 'boleto' ? 'Boleto' : 'Pix' }}</span></p>
                </div>
            @endif
            <div class="mt-4">
                <a href="{{ route('order.index') }}" class="btn btn-secondary me-3">Ver meus pedidos</a>
                <a href="{{ route('index') }}" class="btn btn-primary">Continuar comprando</a>
            </div>
        </div>
    </section>
@endsection
