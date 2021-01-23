@extends('layouts.auth.auth-app')

@section('content')

<h2 class="text-center mt-4 font-weight-normal">{{ __('Selamat Datang Kembali,') }}<br>
    {{ __('Silahkan Login') }}</h2>
<div class="col-md-6 mx-auto ">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <button type="submit" class="button-white btn-lg btn-block mb-5 mt-5">
            <div class="float-left"> <i class="fab fa-google"></i></div>{{ __('Login dengan
            google') }} 
        </button>
        <div class="form-group ">
            <label for="password">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control border-radius-8 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control border-radius-8 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-check mb-5">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" 
            {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleCheck1">{{ __('Remember me') }}</label>
            <label class="text-right float-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-dark">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
                
            </label>
        </div>
        <button type="submit" class="button-green btn btn-lg btn-block">{{ __('Login') }}</button>
    </form>
</div>
<div class="text-center mt-2">{{ __('Belum punya akun?') }}
    <a href="{{ route('register') }}" class="text-decoration-none text-dark">
        <b>{{ __('Daftar sekarang') }}</b>
    </a>
</div>
@endsection
