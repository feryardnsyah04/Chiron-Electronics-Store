@extends('layouts.app')

@section('title', 'About Us - Chiron Corporation')

@section('content')
    <div class="container">
        <h1 class="text-center" style="margin-top: 50px;">About</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('images/logo1.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
                <div id="btn4"><button>Read More...</button></div>
            </div>
        </div>
    </div>
@endsection
