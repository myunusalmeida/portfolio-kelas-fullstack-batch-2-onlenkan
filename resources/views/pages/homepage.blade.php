@extends('layouts.home')

@section('content')
<!-- CODINGAN UNTUK HEADER -->
<div class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="header-title">Exclusive Collection For Everyone</h1>
                <p class="header-description">
                    Influential, innovative and progressive, Versace is reinventing
                    a wholly modern approach to fashion to help you look unique.
                </p>
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="btn btn-black rounded-5 px-4">Our Collections</a>
                    <a href="#" class="btn btn-outline-primary-store rounded-5 px-4">Shop Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ url('assets/images/header-image.png') }}" alt="Header Lalala" class="header-image">
            </div>
        </div>
    </div>
</div>
<!-- TUTUP CODINGAN UNTUK HEADER -->

<!-- DISCOVER -->
<section class="discover">
    <div class="container">
        <h2 class="section-title text-center mb-4">Discover Now</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-center border-0 mb-3">
                    <img src="{{ url('assets/images/explore.png') }}" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Explore New Arrivals</h5>
                        <p class="section-description">
                            Shop The Last From Top Brands
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center border-0 mb-3">
                    <img src="{{ url('assets/images/gift.png') }}" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Digital Gift Cards</h5>
                        <p class="section-description">
                            Give The of Choice
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center border-0 mb-3">
                    <img src="{{ url('assets/images/sale.png') }}" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Sale Collection</h5>
                        <p class="section-description">
                            Up To 50% Off Retail
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TUTUP DISCOVER -->

<!-- CODINGAN UNTUK ARRIVAL -->
<section class="arrival">
    <div class="container">
        <div class="row align-items-center justify-content-between header-section mb-4">
            <h2 class="section-title col-md-7">New Arrival</h2>

            <div class="col-md-5">
                <div class="d-flex align-items-center gap-2 float-end">
                    <button class="btn btn-light rounded-5" id="btnPrevArrival">
                        <i class='bx bx-left-arrow-alt fs-5'></i>
                    </button>
                    <button class="btn btn-light rounded-5" id="btnNextArrival">
                        <i class='bx bx-right-arrow-alt fs-5'></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="swiper" id="newArrival">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png') }}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/sepatu.png') }}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png') }}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png') }}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png') }}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TUTUP CODINGAN UNTUK ARRIVAL -->

<!-- CODINGAN UNTUK ExPLORE NOW -->
<div class="container">
    <div class="header px-5 rounded-4" style="background-color: #EFF9FF">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-5">
                <img src="{{ url('assets/images/explore-image.png')}}" alt="Header Lalala" class="header-image">
            </div>
            <div class="col-md-6">
                <h1 class="header-title">Explore Our New Arrivals</h1>
                <p class="header-description fs-5">
                    Get ready, skanks! It's time for the truth train! This is the greatest case of false
                    advertising I've seen since I sued the movie
                    "The Never Ending Story." I've done everything the Bible says — even the stuf!
                </p>
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="btn btn-black rounded-5 px-4">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TUTUP CODINGAN UNTUK EKSPLORE -->

<!-- CODINGAN UNTK BEST SELLER -->
<section class="arrival">
    <div class="container">
        <div class="row align-items-center justify-content-between header-section mb-4">
            <h2 class="section-title col-md-7">Best Seller</h2>

            <div class="col-md-5">
                <div class="d-flex align-items-center gap-2 float-end">
                    <button class="btn btn-light rounded-5" id="btnPrevBestSeller">
                        <i class='bx bx-left-arrow-alt fs-5'></i>
                    </button>
                    <button class="btn btn-light rounded-5" id="btnNextBestSeller">
                        <i class='bx bx-right-arrow-alt fs-5'></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="swiper" id="bestSeller">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png')}}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/sepatu.png')}}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png')}}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png')}}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-white border-0">
                        <div class="card-body">
                            <img src="{{ url('assets/images/denim.png')}}" class="product-image" alt="">
                            <h4 class="product-title">Denim Dress Nescafe</h4>
                            <p class="product-info">Some Manufactur As</p>

                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span>Rp</span> 500.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TUTUP CODINGAN UNTUK BEST SELLER -->

@include('includes.benefit')

@endsection

@push('addon-script')
<script>
    var arrival = new Swiper('#newArrival', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '#btnNextArrival',
            prevEl: '#btnPrevArrival'
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 2,
            },
            320: {
                slidesPerView: 1,
            }
        }
    })

    var bestSeller = new Swiper('#bestSeller', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: '#btnNextBestSeller',
            prevEl: '#btnPrevBestSeller'
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 2,
            },
            320: {
                slidesPerView: 1,
            }
        }
    })
</script>
@endpush
