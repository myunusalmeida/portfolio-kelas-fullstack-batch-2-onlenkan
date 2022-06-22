@extends('layouts.dashboard')

@section('content')
<div class="row statistics mt-5">
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icons">
                        <i class="bx bx-shopping-bag" style="color: #FF8A00;"></i>
                    </div>
                    <span class="percent text-success">+25%</span>
                </div>
                <h5 class="card-title mt-3">Rp. 5,000,000</h5>
                <p class="m-0 text-secondary">Total Sales</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icons">
                        <i class="bx bx-pie-chart-alt" style="color: #603CB6;"></i>
                    </div>
                    <span class="percent text-success">+25%</span>
                </div>
                <h5 class="card-title mt-3">Rp. 5,000,000</h5>
                <p class="m-0 text-secondary">Total Expanses</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icons">
                        <i class="bx bx-group text-success"></i>
                    </div>
                    <span class="percent text-success">+25%</span>
                </div>
                <h5 class="card-title mt-3">250,000</h5>
                <p class="m-0 text-secondary">Total Customers</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="icons">
                        <i class="bx bx-cart text-danger"></i>
                    </div>
                    <span class="percent text-danger">-25%</span>
                </div>
                <h5 class="card-title mt-3">12,000</h5>
                <p class="m-0 text-secondary">Total Orders</p>
            </div>
        </div>
    </div>
</div>

<div class="statistics mt-5">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h4 class="card-title">Income</h4>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary px-4" type="button" data-bs-toggle="dropdown">
                        2021
                    </button>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">2022</a>
                        <a href="#" class="dropdown-item">2021</a>
                        <a href="#" class="dropdown-item">2020</a>
                        <a href="#" class="dropdown-item">2019</a>
                    </div>
                </div>
            </div>
            <canvas id="incomeStatistic" height="100"></canvas>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="{{ url('assets/vendors/chartJS/dist/chart.min.js') }}"></script>
<script>
    const incomeStatistic = document.getElementById('incomeStatistic');
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    const incomeStatisticData = {
        label: 'Income',
        data: [2000000, 4000000, 1000000, 5000000, 1000000, 7000000, 6000000, 10000000, 9000000, 1000000, 5000000, 1000000],
        backgroundColor: '#603CB6'
    }

    let chart = new Chart(incomeStatistic, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [incomeStatisticData],

        }
    })
</script>
@endpush
