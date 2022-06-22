@extends('layouts.app')
@section('title', 'Sign up')

@section('content')
<div class="row align-items-center justify-content-center gap-5">
    <div class="col-md-5">
        <img src="{{ url('assets/images/register-image.png') }}" alt="">
    </div>
    <div class="col-md-6">
        <a href="{{ url('/') }}" class="logo mb-4">Belanjaiin</a>
        <h4 class="section-subtitle text-center">Register your account!</h4>
        <p class="section-description text-center mb-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, numquam? Distinctio,
            tempora, totam quod ducimus cumque error,
            iusto aperiam eius delectus veniam porro natus? Laudantium, quas! Ea libero est a.
        </p>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Nama Lengkap</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password-confirm">Konfirmasi Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button class="btn btn-primary-store w-100" type="submit">Sign Up</button>
            <p class="section-description text-center mt-3">Already have account? <a href="{{ url('/login') }}">Sign In</a></p>
        </form>
    </div>
</div>
@endsection
