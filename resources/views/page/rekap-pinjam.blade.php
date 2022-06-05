@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="row">
            <div class="mb-3">
                <div class="row keterangan">
                    <form>
                        <label for="rekapPinjam">Rekap Peminjaman</label>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6 text-center card card-post shadow">
                <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->image }}">
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6 text-center">
                <form action="{{ url('pinjam/' . $post->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class=" mb-3 form-jumlah shadow col">
                            <p class="float-start ms-2" style="margin-top:0.8em ">Jumlah</p>
                            <div class="counter float-end me-2">
                                <a class="searchIcon"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    {{-- <img src="img/search.png" alt=""> --}}
                                    <i class="bi bi-dash" style="color: #333333"></i>
                                </a>
                                <input name="jumlahPinjam" type="number"
                                    class="jmlhhBox text-center @error('jumlahPinjam') is-invalid @enderror" value="0"
                                    min="0" value="{{ old('jumlahPinjam') }}">
                                <a class="searchIcon"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    {{-- <img src="img/search.png" alt=""> --}}
                                    <i class="bi bi-plus" style="color: #333333"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input name="tgl_mulai" type="date"
                            class="form-control me-2 text-center shadow @error('tgl_mulai') is-invalid @enderror"
                            placeholder="Tanggal Mulai" value="{{ old('tgl_mulai') }}">
                        <input name="tgl_akhir" type="date"
                            class="form-control text-center shadow @error('tgl_akhir') is-invalid @enderror"
                            placeholder="Tanggal Akhir" value="{{ old('tgl_akhir') }}">
                        <small class="col text-left mt-3"><strong>*Note: Max 14 hari</strong></small>
                    </div>
                    <button class="btn  w-50 mb-4 btnSignIn shadow">Chekckout>></button>
                </form>
            </div>
        </div>

    </div>
@endsection
