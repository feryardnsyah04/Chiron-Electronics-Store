@extends('layouts.app')

@section('title', 'About Us - Chiron Corporation')

@section('content')
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <h2>About Us</h2>
                <h3>Discover Our Product</h3>
                <p>Product</p>
                <div class="social-links">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <a href="" class="btn btn-primary mt-3">Learn More</a>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <img src="{{ asset('images/image22.jpg') }}" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
