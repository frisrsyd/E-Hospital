@extends('app')
@section('content')
    <div class="banner mb-3">
        <h2 class="text-center"> Lupa Password </h2>
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-5">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <div class="container mt-3 ">
                                    <div class="col">
                                        <form enctype="multipart/form-data">
                                            @csrf
                                            <div class="mx-5 mb-3 form-control shadow col send-control">
                                                <input name="email" type="text" class="sendBox"
                                                    placeholder="Masukkan Email">
                                                <button class="btn " type="submit">Kirim Code</button>
                                            </div>
                                            <div class="mx-5 mb-3">
                                                <input name="password" type="password" class="form-control send-control"
                                                    placeholder="Masukkan Code Verifikasi">
                                            </div>
                                            <div class="text-center me-4">
                                                <a href="{{ url('reset-password') }}">
                                                    <button class="btn btnSignIn mb-md-4 shadow" type="button">Next</button>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
