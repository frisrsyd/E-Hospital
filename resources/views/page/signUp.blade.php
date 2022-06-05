@extends('app')
@section('content')
    <div class="banner mb-3">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <h2 class="text-center"> Daftar Akun </h2>
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-5">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody class="table-body">
                                    <tr>
                                        <td>
                                            <div class="container mt-3 pt-5">
                                                <div class="row search-container">
                                                    <div class="col text-center">
                                                        <form enctype="multipart/form-data" method="POST"
                                                            action="/register">
                                                            @csrf

                                                            <div class="mx-5 mb-3">
                                                                <input name="name" type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    placeholder="Masukkan Nama" required
                                                                    value="{{ old('name') }}">
                                                            </div>
                                                            @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="mx-5 mb-3">
                                                                <input name="nik" type="number"
                                                                    class="form-control @error('nik') is-invalid @enderror"
                                                                    placeholder="Masukkan NIK" required
                                                                    value="{{ old('nik') }}">
                                                            </div>
                                                            @error('nik')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="mx-5 mb-3">
                                                                <input name="username" type="text"
                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                    placeholder="Masukkan Username" required
                                                                    value="{{ old('username') }}">
                                                            </div>
                                                            @error('username')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="mx-5 mb-3">
                                                                <input name="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    placeholder="Masukkan Email" required
                                                                    value="{{ old('email') }}">
                                                            </div>
                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="mx-5 mb-3">
                                                                <input name="password" type="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    placeholder="Masukkan Password" required>
                                                            </div>
                                                            @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="mx-5 mb-3">
                                                                <input name="password_confirmed" type="password"
                                                                    class="form-control @error('password_confirmed') is-invalid @enderror"
                                                                    placeholder="Konfirmasi Password" required>
                                                            </div>
                                                            @error('password_confirmed')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <button class="btn btnSignIn mb-md-4 shadow" type="submit">Sign
                                                                Up</button>
                                                            <div><a href="{{ 'login' }}" class="btn"
                                                                    style="color: blue">Login Here</a></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection