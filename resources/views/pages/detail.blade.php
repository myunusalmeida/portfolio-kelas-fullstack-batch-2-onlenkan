@extends('layouts.home')

@section('content')
<section class="detail-product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('assets/images/denim.png')}}" alt="" class="hero-image" id="heroImage">

                <div class="d-flex gap-3">
                    <img src="{{ url('assets/images/denim.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                    <img src="{{ url('assets/images/detail-1.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                    <img src="{{ url('assets/images/detail-2.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                    <img src="{{ url('assets/images/detail-3.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                    <img src="{{ url('assets/images/detail-4.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                    <img src="{{ url('assets/images/detail-5.png')}}" onclick="imgPreview(this.src)" alt="" class="choice-image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbs d-flex align-items-center gap-2 mb-3">
                    <a href="#" class="m-0 section-description">Men</a>
                    <i class="bx bx-chevron-right fs-5"></i>
                    <a href="#" class="m-0 section-description">Clothing</a>
                    <i class="bx bx-chevron-right fs-5"></i>
                    <p class="m-0 section-description">Denim Apa Gitu</p>
                </div>
                <h2 class="section-title mb-4">Denim Apa Gitu</h2>
                <div class="price d-flex align-items-center gap-3">
                    <h4 class="section-subtitle">Rp. 350,000</h4>
                    <p class="text-danger text-decoration-line-through fs-5 m-0">Rp. 400,000</p>
                </div>
                <hr class="my-4">
                <div class="row mb-3">
                    <div class="col-4">
                        <p class="section-description fw-bold m-0">Stock :</p>
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 section-description">230</p>
                            <span class="text-succes">In Stock</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <p class="section-description fw-bold m-0">Description :</p>
                    </div>
                    <div class="col-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco.
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-4">
                        <p class="section-description fw-bold m-0">Quantity :</p>
                    </div>
                    <div class="col-8">
                        <div class="quantity d-flex align-items-center gap-3">
                            <span id="minus" onclick="minus()"><i class="bx bx-minus"></i></span>
                            <p class="m-0 section-description" id="quantityCount">1</p>
                            <span id="plus" onclick="plus()"><i class="bx bx-plus"></i></span>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mt-5">
                    <button type="submit" class="btn btn-dark py-3 px-4 rounded-5 fw-bold d-flex align-items-center gap-3">
                        Add to Cart <i class="bx bx-shopping-bag fs-5"></i>
                    </button>

                    <a href="#" class="btn btn-outline-dark py-3 px-5 rounded-5 fw-bold d-flex align-items-center gap-3">
                        Add to wishlist <i class="bx bx-heart fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <hr>
</div>

<section class="arrival similiar-project">
    <div class="container">
        <h2 class="section-subtitle">Similiar products</h2>

        <div class="row mt-5">
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
@endsection

@push('addon-script')
<script>
    function minus() {
        var x = document.getElementById("quantityCount").innerHTML;
        if (x > 1) {
            x--;
            document.getElementById("quantityCount").innerHTML = x;
        }
    }

    function plus() {
        var x = document.getElementById("quantityCount").innerHTML;
        x++;
        document.getElementById("quantityCount").innerHTML = x;
    }
</script>
@endpush
