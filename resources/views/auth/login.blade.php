@extends('layouts.auth.auth-app')

@section('content')

<div class="col-md-6 mx-auto ">
    <h2 class="my-3 font-weight-normal">{{ __('Login Member Area') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group ">
            <label for="password">{{ __('Alamat Email') }}</label>
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

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" 
            {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="exampleCheck1">{{ __('Tetap masuk') }}</label>
            <label class="text-right float-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-dark">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
                
            </label>
        </div>
        <button type="submit" class="button-green btn btn-lg btn-block">{{ __('Login') }}</button>
        <div class="text-center mt-2">{{ __('Belum punya akun?') }}
            <a href="{{ route('register') }}" class="text-decoration-none text-dark">
                <b>{{ __('Daftar sekarang') }}</b>
            </a>
        </div>
        <hr class="divider">
        <a href="{{ url('auth/google') }}" class="text-center text-decoration-none button-white btn-lg btn-block">
            <div class="float-left"> <i class="fab fa-google"></i></div>{{ __('Login dengan
            google') }} 
        </a>
    </form>
</div>

@endsection
