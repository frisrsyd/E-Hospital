@extends('app')
@section('content')
    <div class="banner mb-3">
        <h2 class="text-center"> Masukkan Password Baru </h2>
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-5">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody class="table-body">
                                    <tr>
                                        <td>
                                            <div class="container mt-3 pt-5">
                                                <div class="row search-container">
                                                    <div class="col text-center">
                                                        <form enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="mx-5 mb-3">
                                                                <input name="email" type="text" class="form-control"
                                                                    placeholder="Masukkan Password Baru">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="password" type="password"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Ulang Password Baru">
                                                            </div>
                                                            <button class="btn btnSignIn mb-md-4 shadow"
                                                                type="submit">Next</button>
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
