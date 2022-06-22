@extends('layouts.home')

@section('content')
    <!-- CODINGAN UNTUK HEADER -->
    <div class="header" style="padding: 80px 0">
        <div class="container">
            <p class="header-description text-center">Set your style to be a real men</p>
            <h1 class="header-title text-center">Men Collection</h1>
        </div>
    </div>
    <!-- TUTUP CODINGAN UNTUK HEADER -->

    <section class="products">
        <div class="container">
            <div class="d-flex gap-3 mb-5">
                <div class="dropdown">
                    <button class="btn btn-outline-dark px-4 rounded-5 dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                        <li><a class="dropdown-item" href="#">Suit</a></li>
                        <li><a class="dropdown-item" href="#">Shoes</a></li>
                        <li><a class="dropdown-item" href="#">Jackets</a></li>
                        <li><a class="dropdown-item" href="#">Purse</a></li>
                    </ul>
                </div>
                <a href="#" class="btn btn-outline-dark rounded-5 px-4">Highest To Lowest Price</a>
                <a href="#" class="btn btn-outline-dark rounded-5 px-4">Lowest To Highest Price</a>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
                <div class="col-md-3">
                    <div class="card bg-white border-0 mb-3">
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
    </section>

    @include('includes.benefit')
@endsection
