@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card p-4 shadow-lg border-0 my-4">
                <img src={{ asset('images/logo1.png') }} alt="Login" class="d-block mx-auto">
                <h4 class="text-center">Login</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group" style="width: 218px">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control rounded-pill" required>
                    </div>
                    <div class="form-group" style="width: 270px">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control rounded-pill" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" id="customCheckbox" class="custom-control-input">
                            <label for="customCheckbox" class="custom-control-label">Remember Me</label><br>
                            <a href="{{ route('password.request') }}" class="float-right">Forgot Password</a>
                        </div>
                    </div>
                    <button class="btn btn-primary rounded-pill btn-block">Login</button>
                </form>

                <p class="small text-center my-4"><a href="{{ route('register') }}">Register Here</a></p>
                <hr>
                <p class="small text-center my-3">Copyright &copy; 2025. Chiron electronic store.</p>
            </div>
        </div>
    </div>
</div>
@endsection
