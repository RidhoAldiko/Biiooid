@extends('layouts.landing_page.landingpage-app')
@section('title' , 'Harga Produk')
@section('content')
<div class="bg-white pages">
    <div class="container">
        <div class="row justify-content-center">
            <p class="title-price">Skema harga yang simple</p>
        </div>
        <div class="row justify-content-center align-items-center option-time">
            <div class="custom-control custom-switch">
                <label for="skemaHarga" class="distance">6 Bulan</label>
                <input type="checkbox" class="custom-control-input" id="skemaHarga">
                <label class="custom-control-label distance" for="skemaHarga">1 Tahun</label>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div id="free">
                    {{-- content free here --}}
                </div>
            </div>
            <div class="col-md-4  ">
                <div id="business">
                    {{-- content business here --}}
                </div>
            </div>
            <div class="col-md-4  ">
                <div id="premium">
                    {{-- content premium here --}}
                </div>
            </div>
        </div>



    </div>
</div>
@include('footer')

@push('addscript')
    <script>
            let free = `
            <div class="card border-free">
                <div class="card-body d-flex flex-column">
                    <p class="text-center card-title-price">FREE</p>
                    <P class="text-center card-time-price">Rp. 0/Selamanya</P>
                    <p class="text-center">0/Bulan</p>
                    <ul>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Clicks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Header</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">1 Biolink</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Basic Themes</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Basic Custom Background</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Basic Custom Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Basic Custom Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Basic Analytics</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-auto btn-free btn-text btn-sm">DAFTAR SEKARANG</a>
                </div>
            </div>
            `;

            let business6 = `
            <div class="card border-business">
                <div class="card-body d-flex flex-column">
                    <p class="text-center card-title-price">BUSINESS</p>
                    <P class="text-center card-time-price">Rp420k/Tahun</P>
                    <p class="text-center"><span class="line-delete">Rp50k/Bulan</span> Rp35k/Bulan</p>
                    <ul>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Clicks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Header</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">10 Biolinks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Buttons</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Slider</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Banner</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Texts</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Youtube Embed</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">QR Code</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Themes</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Background</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Font</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Facebook Pixel</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Retargetting</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Title</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Meta Description</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Remove biioo.id Logo</li>
                    </ul>
                    <a href="{{url('/pro','business6')}}" class="btn btn-secondary mt-auto btn-business btn-text btn-sm">BELI SEKARANG</a>
                </div>
            </div>
            `;

            let premium6 =  `
            <div class="card border-premium">
                <div class="card-body d-flex flex-column">
                    <p class="text-center card-title-price">PREMIUM</p>
                    <P class="text-center card-time-price"> Rp300k/Tahun</P>
                    <p class="text-center"><span class="line-delete"> Rp35k/Bulan </span>  Rp25k/Bulan</p>
                    <ul>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Clicks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Header</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Biolinks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Buttons</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">1 Slider</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Banner</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Texts</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Youtube Embed</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">QR Code</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Themes</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Background</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Font</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Facebook Pixel</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Retargetting</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Title</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Meta Description</li>
                    </ul>
                    <a href="{{url('/pro','premium6')}}" class="btn btn-secondary mt-auto btn-premium btn-text btn-sm">BELI SEKARANG</a>
                </div>
            </div>
            `;


            let business1 = `
            <div class="card border-business">
                <div class="card-body d-flex flex-column">
                    <p class="text-center card-title-price">BUSINESS</p>
                    <P class="text-center card-time-price"><span class="text-danger"><del>Rp720k</del></span> Rp300k/Tahun</P>
                    <p class="text-center"><span class="text-danger"><del>Rp60k</del></span> Rp25k/Bulan</p>
                    <ul>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Clicks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Header</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">10 Biolinks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Buttons</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Slider</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Banner</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Texts</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Youtube Embed</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">QR Code</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Themes</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Background</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Font</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Facebook Pixel</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Retargetting</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Title</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Meta Description</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Remove biioo.id Logo</li>
                    </ul>
                    <a href="{{url('/pro','business1')}}" class="btn btn-secondary mt-auto btn-business btn-text btn-sm">BELI SEKARANG</a>
                </div>
            </div>
            `;

            let premium1 =  `
            <div class="card border-premium">
                <div class="card-body d-flex flex-column">
                    <p class="text-center card-title-price">PREMIUM</p>
                    <P class="text-center card-time-price"><span class="text-danger"><del>Rp360k </del></span> Rp180k/Tahun</P>
                    <p class="text-center"><span class="text-danger"><del> Rp30k </del></span>  Rp15k/Bulan</p>
                    <ul>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Clicks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Header</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Biolinks</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Unlimited Buttons</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">1 Slider</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Banner</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Texts</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">3 Youtube Embed</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">QR Code</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Themes</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Background</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Button</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Social Icon</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Custom Font</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Pro Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Facebook Pixel</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Analytics</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Google Retargetting</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Title</li>
                        <hr class="border-list"></hr>
                        <li class="font-card-price mb-3">Custom Meta Description</li>
                    </ul>
                    <a href="{{url('/pro','premium1')}}" class="btn btn-secondary mt-auto btn-premium btn-text btn-sm">BELI SEKARANG</a>
                </div>
            </div>
            `;

            document.querySelector('#skemaHarga').addEventListener('click', function(){
                let skema = document.querySelector('#skemaHarga').checked;
                // console.log(skema);

                if (skema == true) {
                // console.log('success')
                document.querySelector('#free').innerHTML=free;
                document.querySelector('#business').innerHTML = business1;
                document.querySelector('#premium').innerHTML = premium1;
                }else if (skema == false) {
                    // console.log('fail')
                    document.querySelector('#free').innerHTML=free;
                    document.querySelector('#business').innerHTML = business6;
                    document.querySelector('#premium').innerHTML = premium6;
                }
            })

            let skema = document.querySelector('#skemaHarga').checked;
            if (skema == false) {
                // console.log('notyet')
                document.querySelector('#free').innerHTML=free;
                document.querySelector('#business').innerHTML = business6;
                document.querySelector('#premium').innerHTML = premium6;
            }
    </script>
@endpush

@endsection
