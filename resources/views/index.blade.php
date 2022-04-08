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
    <section class="mb-5">
        <h2>Novidades</h2>
        <div id="productCarouselNews" class="carousel-products carousel slide mb-6" data-bs-ride="carousel"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex">
                        <div class="card-product">
                            1
                        </div>
                        <div class="card-product ">
                            2
                        </div>
                        <div class="card-product">
                            3
                        </div>
                        <div class="card-product">
                            4
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="d-flex">
                        <div class="card-product ">
                            5
                        </div>
                        <div class="card-product">
                            6
                        </div>
                        <div class="card-product">
                            7
                        </div>
                        <div class="card-product">
                            8
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselNews" data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarouselNews" data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-product-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="mb-6">
        <h2>Para aventureiros intermediarios</h2>
        <div id="productCarouselInt" class="carousel-products carousel slide mb-6" data-bs-ride="carousel"
            data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex">
                        <div class="card-product">
                            1
                        </div>
                        <div class="card-product ">
                            2
                        </div>
                        <div class="card-product">
                            3
                        </div>
                        <div class="card-product">
                            4
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="d-flex">
                        <div class="card-product ">
                            5
                        </div>
                        <div class="card-product">
                            6
                        </div>
                        <div class="card-product">
                            7
                        </div>
                        <div class="card-product">
                            8
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselInt" data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-product-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarouselInt" data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-product-icon" aria-hidden="true"></span>
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
