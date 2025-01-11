@extends('layouts.auth')

@section('title', 'Login - Chiron Corporation')

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
                            <label for="showPassword" class="custom-control-label">
                                <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
                            </label><br>
                            <a href="{{ route('password.request') }}" class="float-right">Forgot Password</a>
                        </div>
                    </div>
                    <button class="btn btn-primary rounded-pill btn-block">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}">Register here</a>
                </div>
                <hr>
                <p class="small text-center my-3">Copyright &copy; 2025. Chiron electronic store.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
@endsection