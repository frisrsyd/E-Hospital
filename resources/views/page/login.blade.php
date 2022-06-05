@extends('app')

@section('content')
    <style type="text/css">
        .login {
            margin: 50px auto;
            width: 400px;
            padding: 10px;
        }

        input[type=email] {
            margin: 15px auto;
            width: 100%;
            padding: 10px;
        }

        input[type=password] {
            margin: 15px auto;
            width: 100%;
            padding: 10px;
        }

    </style>
    <div class="container mt-5 pt-5">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="mb-3">
            @csrf
            <img src="img/logo.png" height="50" style="display:block; margin:auto;">
        </div>
        <div class="login">
            <form method="post" action="/login">
                @csrf

                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <p> </p>
                <center><button type="submit" class="btn btnSignIn btn-block">Log In</button></center>
                <hr>
                <p class="text-center" style="color: black">Belum punya akun? <a href="{{ url('signUp') }}"
                        style="color: blue">Register</a> sekarang!</p>
                <p class="text-center" style="color: black">Lupa password? klik <a href="{{ url('lupapassword') }}"
                        style="color: blue">disini</a> </p>
            </form>
        </div>
    </div>
@endsection