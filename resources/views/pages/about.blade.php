@extends('layouts.app')

@section('title', 'About Us - Chiron Corporation')

@section('content')
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <h2 style="color: #0f3461"><b>Tentang Kami</b></h2>
                <hr>
                <h3>Temukan Produk Kami</h3>
                <p id="text-about-us">“Di Chiron Electronics, kami berdedikasi untuk menghadirkan teknologi mutakhir dan produk inovatif yang dirancang untuk memperkaya gaya hidup Anda. Jelajahi beragam produk elektronik berkualitas tinggi kami, yang dibuat untuk memenuhi kebutuhan Anda dan melampaui harapan Anda.”</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/ChironCorporationn" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/Chiron_Corp" target="_blank"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.instagram.com/chiron_corporation" target="_blank"><i class="bx bxl-instagram"></i></a>
                </div>
                <a href="#keunggulan-kami" class="btn btn-primary mt-3">Pelajari Selengkapnya</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/image22.jpg') }}" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<div id="keunggulan-kami" class="keunggulan-kami">
    <div class="container">
        <h2 class="text-center mt-5" style="color: #0f3461"><b>Keunggulan Kami</b></h2>
        <p class="text-center">"Kami mengutamakan elektronik berkualitas tinggi, yang dibuat untuk memenuhi kebutuhan Anda dan melampaui harapan Anda.”</p>
        <div class="row text-center mt-4">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/certificate.jpg') }}" alt="Berlisensi Resmi" class="mb-3">
                <h4>Berlisensi Resmi</h4>
                <p>Selalu bekerja sama dan didukung oleh brand produk elektronik dan teknologi ternama.</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/price-tag.jpg') }}" alt="Harga Bersaing" class="mb-3">
                <h4>Harga Bersaing</h4>
                <p>Kami memberikan penawaran harga yang kompetitif sesuai dengan kebutuhan Anda.</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/best-seller.jpg') }}" alt="After Sales" class="mb-3">
                <h4>Top After Sales Service</h4>
                <p>Layanan After Sales Services kami selalu terdepan!</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/security-checked.jpg') }}" alt="Garansi Resmi" class="mb-3">
                <h4>Garansi Resmi</h4>
                <p>Produk yang kami sediakan bergaransi resmi.</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/time-span.jpg') }}" alt="Respon Cepat" class="mb-3">
                <h4>Respon Cepat</h4>
                <p>Kami memberikan respon cepat solusi tepat.</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/return-purchase.jpg') }}" alt="Jaminan Barang Pengganti" class="mb-3">
                <h4>Jaminan Barang Pengganti</h4>
                <p>Apabila produk mengalami kerusakan saat diterima, Kami akan melakukan retur produk dengan s&k yang berlaku.</p>
            </div>
        </div>
    </div>
</div>
@endsection
