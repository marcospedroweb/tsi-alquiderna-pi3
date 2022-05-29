@extends('layouts.app')
@section('content')
    <div class="container-xxl mt-5">
        <h2>Minha cesta</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-7">
                <table class="table">
                    <thead>
                        <th scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start align-items-center" id="cart-product-info">
                                    <img src="{{ asset('storage/itens/1e4JulfWWzWqhiasMRU06AoBiSNVCTkitZc01Rgv.jpg') }}"
                                        alt="Imagem do produto">
                                    <div class="ms-3">
                                        <h3>Nome do produto</h3>
                                        <p>Categoria itemClass, nivel 000</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center border mt-3 mx-3" id="units">
                                    <div>
                                        <a href="{{ route('cart.updateUnit', 'minus') }}" class="btn">
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                    </div>
                                    <div>
                                        {{-- {{ count(App\Models\Cart::NumberOfProductsInCart()) }} --}}
                                        99
                                    </div>
                                    <div>
                                        <a href="{{ route('cart.updateUnit', 'plus') }}" class="btn">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="mx-2 mt-3" id="cart-product-price">
                                    <p>R$ <span class="product-price">9000</span></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>
@endsection
