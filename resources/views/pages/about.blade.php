@extends('layouts.app')

@section('title', 'About Us - Chiron Corporation')

@section('content')
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <h2 style="color: #0f3461"><b>Tentang Kami</b></h2>
                <h3>Temukan Produk Kami</h3>
                <p id="text-about-us">“Di Chiron Electronics, kami berdedikasi untuk menghadirkan teknologi mutakhir dan produk inovatif yang dirancang untuk memperkaya gaya hidup Anda. Jelajahi beragam produk elektronik berkualitas tinggi kami, yang dibuat untuk memenuhi kebutuhan Anda dan melampaui harapan Anda.”</p>
                <div class="social-links">
                    <a href=""><i class="bx bxl-facebook"></i></a>
                    <a href=""><i class="bx bxl-twitter"></i></a>
                    <a href=""><i class="bx bxl-instagram"></i></a>
                </div>
                <a href="" class="btn btn-primary mt-3">pelajari selengkapnya</a>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <img src="{{ asset('images/image22.jpg') }}" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
