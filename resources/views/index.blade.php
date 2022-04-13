@extends('layouts.app')
@section('content')
    <section id="mainCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1296x500.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1296x500.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1296x500.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <section class="mb-6">
        <h2>Novidades</h2>
        <div id="productCarouselNews" class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        1111111111
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        22222
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        3333
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        4444
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        55555
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        66666
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        7777
                    </div>
                </div>
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span class="carousel-control-next-icon carousel-product-icon" aria-hidden="true"
                    data-carousel-target="#productCarouselNews"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2>Extras</h2>
        <div id="productCarouselExtras" class="carousel-products position-relative mb-6">
            <div class="carousel-products-inner d-flex overflow-hidden" data-carousel-show-card="4">
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        1111111111
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        22222
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        3333
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        4444
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        55555
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        66666
                    </div>
                </div>
                <div class="card-product overflow-hidden">
                    <div class="image-product">
                        7777
                    </div>
                </div>
            </div>
            <button class="carousel-products-control-prev btn position-absolute top-50 start-0 translate-middle-y"
                data-carousel-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon d-none" aria-hidden="true"
                    data-carousel-target="#productCarouselExtras"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-products-control-next btn position-absolute top-50 end-0 translate-middle-y"
                data-carousel-slide="next">
                <span class="carousel-control-next-icon carousel-product-icon" aria-hidden="true"
                    data-carousel-target="#productCarouselExtras"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <img src="https://via.placeholder.com/1296x624.png" alt="" class="mb-4">
        <div class="d-flex">
            <img src="https://via.placeholder.com/636x624.png" alt="" class="me-4">
            <img src="https://via.placeholder.com/636x624.png" alt="">
        </div>
        <img src="https://via.placeholder.com/1296x624.png" alt="" class="mt-4">
    </section>
@endsection
