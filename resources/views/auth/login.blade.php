@extends('layouts.app')
@section('title', 'Sign in')

@section('content')
<div class="row align-items-center justify-content-center gap-5">
    <div class="col-md-5">
        <img src="{{ url('assets/images/login-image.png') }}" alt="">
    </div>
    <div class="col-md-6">
        <a href="{{ url('/') }}" class="logo mb-4">Belanjaiin</a>
        <h4 class="section-title text-center">Hello Again!</h4>
        <p class="section-description text-center mb-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, numquam? Distinctio,
            tempora, totam quod ducimus cumque error,
            iusto aperiam eius delectus veniam porro natus? Laudantium, quas! Ea libero est a.
        </p>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
            <button class="btn btn-primary-store w-100" type="submit">Sign In</button>
            <p class="section-description text-center mt-3">Don't have an account yet? <a href="{{ url('/register') }}">Sign Up</a></p>
        </form>
    </div>
</div>
@endsection
