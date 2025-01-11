@extends('layouts.app')

@section('title', 'Chiron Corporation - Electronic Store')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <br><br><br><br><br><br><br><br><br>
        <div class="content">
            <p style="font-size: 2em">Make Your Life<br>To Enjoy</p>
            <br>
            <div id="btn1">
                <a href="{{ url('/shop') }}">
                    <button>Belanja Sekarang!</button>
                </a>
            </div>
            
        </div>
    </div>
    
    <!-- Card 1 -->
    <div class="container" id="home-card-1">
        <h3 class="text-center" style="padding-top: 30px;">Products Discount</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan1.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">CUSTOM MENUS</h5>
                        <p class="text-center">Temukan penawaran terbaik untuk Anda hari ini...</p>
                        <div id="btn2" class="text-center">
                            <a href="{{ url('/shop') }}">
                                <button>Lihat Selengkapnya</button>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan2.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">SMARTEST WAY</h5>
                        <p class="text-center">Belanja mudah dan cepat dengan diskon eksklusif...</p>
                        <div id="btn2" class="text-center">
                            <a href="{{ url('/shop') }}">
                                <button>Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan3.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">USER FRIENDLY</h5>
                        <p class="text-center">Dapatkan produk pilihan dengan harga spesial...</p>
                        <div id="btn2" class="text-center">
                            <a href="{{ url('/shop') }}">
                                <button>Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 1 -->

    <!-- Card 2 -->
    <div class="container pb-5" id="home-card-2">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/airbuds.png') }}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Airbuds</h4>
                        <div id="btn1">
                            <a href="{{ url('/shop') }}">
                                <button>Shop Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/headset.png') }}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Headphones</h4>
                        <div id="btn1">
                            <a href="{{ url('/shop') }}">
                                <button>Shop Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/laptop.png') }}" alt="" class="card-img-top">   
                    <div class="card-img-overlay">
                        <h4 class="card-title">Laptops</h4>
                        <div id="btn1">
                            <a href="{{ url('/shop') }}">
                                <button>Shop Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container pb-5" id="banner-promotion">
        <img src="{{ asset('images/banner2.png') }}" alt="" class="card-img-top banner-image">
    </div>
    <!-- Card 2 -->

@endsection
