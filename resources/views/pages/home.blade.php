@extends('layouts.app')

@section('title', 'Chiron Corporation - Electronic Store')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <br><br><br><br><br><br><br><br><br>
        <div class="content">
            <h1>Make Your Life<br>To Enjoy</h1>
            <br>
            <div id="btn1">
                <button>Shop Now</button>
            </div>
        </div>
    </div>
    
    <!-- Card 1 -->
    <div class="container">
        <h3 class="text-center" style="padding-top: 30px;">Products Discount</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan1.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">CUSTOM MENUS</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan2.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">SMARTEST WAY</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/iklan3.png') }}" alt="" class="card-img-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">USER FRIENDLY</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 1 -->

    <!-- Card 2 -->
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/airbuds.png') }}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Airbuds</h4>
                        <div id="btn2"><button>Buy Now</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/headset.png') }}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h4 class="card-title">HeadPhone</h4>
                        <div id="btn2"><button>Buy Now</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="{{ asset('images/laptop.png') }}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h4 class="card-title">Laptop</h4>
                        <div id="btn2"><button>Buy Now</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
@endsection
