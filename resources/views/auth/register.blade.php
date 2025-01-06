@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card p-4 shadow-lg border-0 my-4">
                <img src="{{ asset('images/logo1.png') }}" alt="Register" class="d-block mx-auto">
                <h4 class="text-center">Register</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Full Name Field -->
                        <div class="form-group mb-3">
                            <input id="name" type="text" 
                                   class="form-control rounded-pill @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" 
                                   placeholder="Full Name" required autocomplete="name" autofocus>
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <input id="email" type="email" 
                                   class="form-control rounded-pill @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" 
                                   placeholder="Email" required autocomplete="email">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <input id="password" type="password" 
                                   class="form-control rounded-pill @error('password') is-invalid @enderror" 
                                   name="password" placeholder="Password" required autocomplete="new-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group mb-3">
                            <input id="password-confirm" type="password" 
                                   class="form-control rounded-pill" 
                                   name="password_confirmation" 
                                   placeholder="Confirm Password" required autocomplete="new-password">
                        </div>

                        <!-- Register Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded-pill btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>

                    <p class="small text-center my-4">
                        <a href="{{ route('login') }}">Login Here</a>
                    </p>
                </div>
                <hr>
                <p class="small text-center my-3">Copyright &copy; 2025. Chiron electronic store.</p>
            </div>
        </div>
    </div>
</div>
@endsection
