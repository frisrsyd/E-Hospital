@extends('app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row search-container">
            <div class="col-md-6">
                <form enctype="multipart/form-data" method="POST" action="">
                    @csrf
                    
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <input name="nik" type="text" class="form-control" placeholder="Masukkan NIK">
                    </div>
                    <div class="mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <input name="gambar" type="file" class="form-control" placeholder="Masukkan Gambar">
                    </div>
                    <button class="btn btnSignIn mb-md-5 shadow" type="submit">Upload</button>
                    <div><a href="{{ '#' }}" class="btn" style="color: blue">Login Here</a></div>
                </form>
            </div>
        </div>
    </div>
@endsection