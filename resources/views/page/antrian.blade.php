@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Antrian peminjaman</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-antrian') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Request peminjaman alat oleh :</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-antrian') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Request peminjaman alat oleh :</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-antrian') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Request peminjaman alat oleh :</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-antrian') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Request peminjaman alat oleh :</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
