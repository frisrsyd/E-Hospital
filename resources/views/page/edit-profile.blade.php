@extends('app')
@section('content')
    <div class="banner mb-3">
        <h2 class="text-center"> Edit Akun </h2>
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
                                                            action="{{ url('edit-profile/' . auth()->user()->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mx-5 mb-3">
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="Masukkan Nama">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="nik" type="number" class="form-control"
                                                                    placeholder="Masukkan NIK">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="username" type="text" class="form-control"
                                                                    placeholder="Masukkan Username">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="email" type="email" class="form-control"
                                                                    placeholder="Masukkan Email">
                                                            </div>
                                                            <button class="btn btnSignIn mb-md-4 shadow"
                                                                type="submit">Edit</button>
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
