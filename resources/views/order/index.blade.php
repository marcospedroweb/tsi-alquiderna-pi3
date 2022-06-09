@extends('layouts.app')
@section('content')
    <section class="container-xxl d-flex justify-content-center align-items-center mb-6 mt-5">
        <div class="bg-white p-4 col-10">
            <h2 class="h2 text-center">Meus pedidos</h2>
            @if (count($items) == 0)
                <div class="bg-white p-2">
                    <h3 class="h3 text-center m-0">Você ainda não fez nenhum pedido</h3>
                </div>
            @else
                <div class="mt-2 mb-4" id="my-orders">
                    @foreach ($items as $item)
                        <div class="d-flex justify-content-start align-items-start mb-4 border">
                            <img src="{{ asset($item->Product->image) }}" class="rounded" alt="">
                            <div class="ms-4">
                                <h3 class="h3">Número do pedido: <span
                                        class="fw-bold">{{ $item->order_number }}</span></h3>
                                <h4 class="h4 mt-3">Mais informações</h4>
                                <div class="d-flex align-items-start">
                                    <ul>
                                        <li class="mb-2">Nome do produto: {{ $item->Product->name }}</li>
                                        <li class="mb-2">Categoria: {{ $item->Product->Category->name }}</li>
                                        <li class="mb-2">Classe do item: {{ $item->Product->ItemClass->name }}
                                        </li>
                                        <li class="mb-2">Nível: {{ $item->level }}</li>
                                        <li class="mb-2">Durabilidade: {{ $item->durability }}</li>
                                        <li class="mb-2">Endereço: {{ $item->street }}, {{ $item->number }}
                                            {{ $item->complement }}</li>
                                    </ul>
                                    <ul>
                                        <li class="mb-2">Unidades: {{ $item->units }}</li>
                                        <li class="mb-2">Encantamento:
                                            {{ $item->enchant == 1 ? 'Sim' : 'Não' }}
                                        </li>
                                        <li class="mb-2">Garantia quebra ou defeito:
                                            {{ $item->breakage_guarantee == 1 ? 'Sim - ' . $item->breakage_guarantee_months . ' meses' : 'Não' }}
                                        </li>
                                        <li class="mb-2">Garantia furto ou roubo:
                                            {{ $item->theft_guarantee == 1 ? 'Sim - ' . $item->theft_guarantee_months . ' meses' : 'Não' }}
                                        </li>
                                        <li class="mb-2">Valor pago: R$ <span
                                                class="product-price">{{ $item->product_price }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                    class="attributes col-8 mx-auto d-flex justify-content-between align-items-center border p-2 mt-2">
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
            @endif
        </div>
    </section>
@endsection
