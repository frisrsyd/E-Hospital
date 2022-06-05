@extends('app')
@section('content')
    <div class="banner_top">

        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
    </div>
    <div class="banner mb-3">
        @auth
            <div class="profile-image shadow"></div>
            <div class="profile-info text-center mt-2">
                <h4 class="name fw-bold" style="color: #333333">{{ auth()->user()->name }} <a
                        href="{{ url('edit-profile') }}"><small><i class="bi bi-pencil-fill"></small></i></a>
                </h4>
                <span class="text-muted">{{ auth()->user()->email }}</span>
            </div>
        @endauth
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-6">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody class="table-body">
                                    @auth
                                        <tr>
                                            <td>
                                                <a href="{{ url('input-data') }}">Input Data</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="/logout" method="POST">
                                                    @csrf
                                                    <button type="submit" class="logoutBtn">Logout</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>
                                                <a href="{{ url('login') }}">Login</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ url('signUp') }}">Sign Up</a>
                                            </td>
                                        </tr>
                                    @endauth
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
