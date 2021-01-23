@if (request()->is('/'))
    <div class="alert alert-custom-black text-white font-weight-bold rounded-0 m-0" role="alert">
        <p class="text-center m-0">Promo Special !!</p>
    </div>
@elseif (request()->is('harga'))
    <div class="alert alert-custom-pink text-dark font-weight-bold rounded-0 m-0" role="alert">
        <p class="text-center m-0">Promo Special !!</p>
    </div>
@else
    ''
@endif
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
    <a class="navbar-brand pl-3 pt-2 pb-2 mr-5" href="{{url('/')}}">
        <img src="/img/biioo-logo.png" width="146" height="50" alt="" loading="lazy">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a href="/" class="nav-link mt-2 pr-3 {{ request()->is('/') ? ' active' : ''}}">
                <b>{{ __('Beranda') }}</b>
            </a>
            <a href="/harga" class="nav-link mt-2 pr-3 {{ request()->is('harga') ? ' active' : ''}}">
                <b>{{ __('Harga') }}</b>
            </a>
        </div>
        @if (Route::has('login'))
            @auth
            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown mt-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/img/thumbnail.svg" width="40" height="40" class="rounded-circle mr-3">
                        {{{ ucwords(Auth::user()->user_name) }}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/dashboard')}}">{{ __('Dashboard') }}</a>
                        <a class="dropdown-item" href="{{url('/profile')}}">{{ __('Profile') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            @else
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('login') }}" class="yuhuu nav-link mt-2 pr-3 ">
                        <b>{{ __('Masuk') }}</b>
                    </a>
                    <a href="{{ route('register') }}" class="nav-link mt-2 btn button-green text-center px-4">
                        <b>{{ __('Daftar') }}</b>
                    </a>
                </div>
            @endif
        @endif
    </div>
</div>
</nav>
