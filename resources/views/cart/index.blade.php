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
                        <tr>
                            <td class="div-product-info">
                                <div class="d-flex justify-content-start align-items-center" id="cart-product-info">
                                    <img src="{{ asset('storage/itens/1e4JulfWWzWqhiasMRU06AoBiSNVCTkitZc01Rgv.jpg') }}"
                                        alt="Imagem do produto">
                                    <div class="ms-3">
                                        <h3>Nome do produto</h3>
                                        <p>Categoria itemClass, nivel 000</p>
                                    </div>
                                </div>
                            </td>
                            <td class="div-product-units">
                                <div class="d-flex justify-content-center align-items-center border mt-3 mx-3" id="units">
                                    <div>
                                        <a href="{{ route('cart.updateUnit', ['value' => 'minus', 'order' => 1]) }}"
                                            class="btn">
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                    </div>
                                    <div id="div-input-units">
                                        {{-- {{ count(App\Models\Cart::NumberOfProductsInCart()) }} --}}
                                        <input type="text" name="units" value="99" maxlength="2" minlength="1">
                                    </div>
                                    <div>
                                        <a href="{{ route('cart.updateUnit', ['value' => 'plus', 'order' => 1]) }}"
                                            class="btn">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="div-product-price">
                                <div class="mt-4" id="cart-product-price">
                                    <p>R$ <span class="product-price">90000</span></p>
                                </div>
                            </td>
                            <td class="div-product-price">
                                <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal"
                                    data-bs-target="#modal-product-1">
                                    Ver detalhes
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-product-1" tabindex="-1"
                                    aria-labelledby="modal-product-1-Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-product-1-Label">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Editar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
@endsection
