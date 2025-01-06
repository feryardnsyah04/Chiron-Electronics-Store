@extends('layouts.app')

@section('title', 'Shop - Chiron Corporation')

@section('content')
<div class="container py-5" id="shop-content">
    <h1 class="text-center mb-4">Belanja</h1>
    <p class="text-center">Jelajahi berbagai produk yang kami tawarkan. Belanja sekarang dan nikmati diskon luar biasa!</p>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
        <div class="col">
            <div class="card">
                <img src="{{ asset('images/5.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">iPhone 13</h5>
                    <p class="card-text">"Experience innovation and performance with the iPhone 13, featuring a sleek design, powerful A15 Bionic chip, advanced dual-camera system, and all-day battery life for a premium smartphone experience."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp9.980.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/airbuds.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Samsung Galaxy Buds3 - Black</h5>
                    <p class="card-text">"Immerse yourself in premium sound with the Samsung Galaxy Buds3, featuring a sleek black design, active noise cancellation, and seamless connectivity for an exceptional audio experience."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp2.299.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/headset.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">JBL 660NC - White</h5>
                    <p class="card-text">"Experience powerful sound and active noise cancellation with the JBL 660NC headphones, designed for all-day comfort and crystal-clear audio in a sleek white finish."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp1.199.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/laptop.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">HP Pavillion G4</h5>
                    <p class="card-text">"The HP Pavilion G4 combines reliable performance with sleek design, making it perfect for everyday computing tasks and entertainment."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp2.980.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/4.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">MYNK-80X Aluminum Wireless Mechanical Keyboard 80% - Black Star, WS Brown</h5>
                    <p class="card-text">"Experience seamless typing with the MYNK-80X Aluminum Wireless Mechanical Keyboard, featuring an 80% compact layout, WS Brown switches, and a sleek Black Star design."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp1.549.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/airbuds.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Logitech G102 Mouse Gaming Wired RGB Lightsync with Macro - Hitam</h5>
                    <p class="card-text">"Enhance your gaming precision with the Logitech G102 Wired Gaming Mouse, featuring customizable RGB Lightsync and programmable macros in a sleek black design."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp289.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/2.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Logitech G333 In-Ear Earphone Gaming Mobile Type C Adapter - Black</h5>
                    <p class="card-text">"Experience immersive gaming audio with the Logitech G333 In-Ear Earphones, featuring a Type-C adapter for seamless mobile connectivity in a sleek black design."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp679.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/3.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">MONITOR SAMSUNG 24 inch FHD IPS 75HZ LS24R350FHEXXD Bezel-less Design - 75Hz</h5>
                    <p class="card-text">"Sleek and bezel-less, the 24-inch Samsung FHD IPS monitor delivers vibrant visuals and smooth 75Hz performance for work and entertainment."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp1.219.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="{{ asset('images/1.png') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Apple Vision Pro Headset VR Virtual Reality Spatial Computing - 1TB</h5>
                    <p class="card-text">"Experience the future of spatial computing with the Apple Vision Pro Headset, featuring immersive virtual reality technology and a massive 1TB storage for seamless performance."</p>
                </div>
                <div class="mb-5 d-flex justify-content-between align-items-center px-3">
                    <span class="price">Rp63.162.000</span>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
