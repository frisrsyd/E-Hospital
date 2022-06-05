@extends('app')

@section('content')
    <div class="banner_top">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif

    </div>
    <div class="container mt-5 pt-5">
        <div class="row search-container justify-content-center">
            <div class="col-md-4">
                <form enctype="multipart/form-data" method="POST" action="/input-data">
                    @csrf
                    <div class="mb-3">
                        <small for="image" class="keterangan">Input Data</small>
                        <input id="image" name="image" type="file"
                            class="form-control mt-2 @error('image') is-invalid @enderror" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select id="toolName" name="toolName"
                            class="form-select form-control @error('toolName') is-invalid @enderror">
                            <option selected>Pilih jenis alat</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('toolName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input name="location" type="url" class="form-control @error('location') is-invalid @enderror"
                            placeholder="Link Google Maps" value="{{ old('location') }}" required>
                        @error('location')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" mb-3 form-control shadow col">
                        <p class="float-start ms-2" style="margin-top:0.3em ">Jumlah</p>
                        <div class="counter float-end me-2">
                            <a class="searchIcon"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                {{-- <img src="img/search.png" alt=""> --}}
                                <i class="bi bi-dash" style="color: #333333"></i>
                            </a>
                            <input name="jumlahAlat" type="number"
                                class="jmlhBox text-center @error('jumlahAlat') is-invalid @enderror" value="0" min="0"
                                value="{{ old('jumlahALat') }}">
                            <a class="searchIcon"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                {{-- <img src="img/search.png" alt=""> --}}
                                <i class="bi bi-plus" style="color: #333333"></i>
                            </a>
                            @error('jumlahAlat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btnSignIn mb-md-5 shadow" type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
