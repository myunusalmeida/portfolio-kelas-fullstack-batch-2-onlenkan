@extends('layouts.home')

@section('content')
<div class="cart detail-product py-5">
    <div class="container">
        <div class="breadcrumbs d-flex align-items-center gap-2 mb-3">
            <a href="#" class="m-0 section-description">Home</a>
            <i class="bx bx-chevron-right fs-5"></i>
            <p class="m-0 section-description">Checkout</p>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>

                <tbody>
                    <tr style="vertical-align: middle">
                        <td><img src="{{ url('assets/images/denim.png')}}" width="50" height="50" style="object-fit: cover;" class="rounded-5" alt=""></td>
                        <td>
                            <h4 class="product-name fs-5 fw-bold">Denim Apa Gitu</h4>
                            <p class="product-store m-0 section-description">Almeida Store</p>
                        </td>
                        <td><p class="product-price m-0 fw-bold">Rp. 350,000</p></td>
                        <td>
                            <div class="quantity d-flex align-items-center gap-3">
                                <span id="minus" onclick="minus()"><i class="bx bx-minus"></i></span>
                                <p class="m-0 section-description" id="quantityCount">1</p>
                                <span id="plus" onclick="plus()"><i class="bx bx-plus"></i></span>
                            </div>
                        </td>
                        <td><p class="product-price m-0 fw-bold">Rp. 350,000</p></td>
                        <td>
                            <a href="#" class="btn text-danger">
                                <i class="bx bx-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <hr>
</div>

<div class="shipping-details py-5">
    <div class="container">
        <h2 class="section-subtitle mb-5">Shipping Details</h2>

        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="phone">Telepon</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="province">Provinsi</label>
                        <input type="text" name="province" id="province" placeholder="Jawa Timur" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="city">Kota</label>
                        <input type="text" name="city" id="city" placeholder="Probolinggo" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="district">Kecamatan</label>
                        <input type="text" name="district" id="district" placeholder="Kanigaran" class="form-control">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group mb-3">
                        <label for="address">Alamat Lengkap</label>
                        <input type="text" name="address" id="address" placeholder="Jalan Raya Ky Hasan Genggong" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="zip_code">Kode POS</label>
                        <input type="text" name="zip_code" id="zip_code" placeholder="67236" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <hr>
</div>

<div class="shipping-payment py-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="payment-details mb-3">
                    <p class="section-description m-0">Subtotal</p>
                    <h4 class="section-subtitle fw-bold">Rp. 8,000,000</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="payment-details mb-3">
                    <p class="section-description m-0">Ongkos Kirim</p>
                    <h4 class="section-subtitle fw-bold">Rp. 25,000</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="payment-details mb-3">
                    <p class="section-description m-0">Total</p>
                    <h4 class="section-subtitle fw-bold">Rp. 8,025,000</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <button type="submit" class="btn btn-dark rounded-5 py-3 px-5 fw-bold">Checkout Now</button>
            </div>
        </div>
    </div>
</div>
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
