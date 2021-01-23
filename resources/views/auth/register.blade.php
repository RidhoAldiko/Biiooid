@extends('layouts.auth.auth-app')

@section('content')
<h2 class="text-center mt-4 font-weight-normal">{{ __('Selamat Datang,') }}<br>
    {{ __('Silahkan Mendaftarkan Akun Anda') }}</h2>
<div class="col-lg-6 mx-auto">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <button type="submit" class="button-white btn-lg btn-block mb-5 mt-5">
            <div class="float-left"> <i class="fab fa-google"></i></div>{{ __('Daftar dengan
            google') }} 
        </button>
        <div class="form-group ">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control border-radius-8 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group ">
            <label for="name">{{ __('Full Name') }}</label>
            <input id="name" type="text" class="form-control border-radius-8 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">{{ __('Phone Number') }}</label>
            <input id="phone" type="number" class="form-control border-radius-8 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control border-radius-8 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control border-radius-8" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class="button-green btn btn-lg btn-block">{{ __('Register') }}</button>

    </form>
</div>
<div class="text-center mt-1">{{ __('By using this service you are agreeing to the') }}<b> {{ __('terms of service') }}</b> {{ __('and') }}
    <b>{{ __('privacy policy') }}</b>
</div>
<div class="text-center mt-2">{{ __('Sudah punya akun?') }}
    <a href="{{ route('login') }}" class="text-decoration-none text-dark">
        <b>{{ __('Login') }}</b>
    </a>
</div>
@endsection
