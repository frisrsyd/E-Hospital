@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="row">
            <div class="col-md-6">
                <div class=" card justify-content-center shadow mb-3">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="2">
                                        <strong>Details</strong>
                                        <hr>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Rincian alat yang dipinjam:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Nama Alat:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->post->tool_name }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Jumlah:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->jumlah_pinjam }} buah</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>No. Pinjam</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->id }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Nama Peminjam:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->user->name }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Tanggal Pinjam:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->tgl_mulai }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Tanggal Kembali:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->tgl_akhir }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Lokasi Peminjaman:</p>
                                    </td>
                                    <td>
                                        <p>{{ $checkout->post->link_location }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
    <script>
        window.print();
    </script>
@endsection
