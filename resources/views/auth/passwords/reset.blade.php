@extends('layouts.auth.auth-app')

@section('content')

<h2 class="text-center mt-4 mb-5 font-weight-normal">{{ __('Masukkan password baru') }}<br>
    {{ __('anda untuk melanjutkan') }}</h2>
<div class="col-md-6 mx-auto ">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group ">
            <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @enderror
        <div class="form-group ">
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
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class=" login-button btn btn-success btn-lg btn-block">{{ __('Reset Password') }}</button>
    </form>
</div>

@endsection
