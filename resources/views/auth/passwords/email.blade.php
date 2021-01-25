@extends('layouts.auth.auth-app')

@section('content')


<h2 class="text-center mt-4 mb-5 ">{{ __('Masukkan alamat email kamu') }}<br>
    {{ __('untuk me-reset password') }}</h2>
<div class="col-md-6 mx-auto ">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group ">
            <label for="email">{{ __('Alamat Email') }}</label>
            <input id="email" type="email" class="form-control border-radius-8 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="button-green btn btn-lg btn-block">{{ __('Reset Password') }}</button>
    </form>
</div>
<div class="text-center mt-2">
    <a href="/login" class="text-decoration-none text-dark">
        {{ __(' Kembali kehalaman login') }}
    </a>
</div>
@endsection
