@extends('layouts.auth.auth-app')

@section('content')
<h2 class="text-center my-5 font-weight-normal">{{ __('Verifikasi Email Kamu') }}
<h4 class="text-center font-weight-normal"> @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('Link verifikasi sudah dikirim ke email kamu') }}
        {{ __(', segera cek email kamu untuk melakukan verifikasi.') }}
    </div>
@endif


<p class="text-justify">{{ __('Hai') }} {{{ ucwords(Auth::user()->user_name) }}}{{ __(', hanya beberapa langkah lagi sebelum akun kamu dapat digunakan. Gunakan tombol dibawah ini untuk memverifikasi email kamu. ') }}</p>
<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit" class="button-green btn btn-lg mt-2 text-left ">{{ __('Verifikasi Email Kamu') }}</button>
</form></h4>
@endsection
