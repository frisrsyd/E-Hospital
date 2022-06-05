@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Detail History</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class=" card detail-control shadow mb-3">
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
                                        <p>Link Lokasi Peminjaman:</p>
                                    </td>
                                    <td>
                                        <a href="{{ $checkout->post->link_location }}" target="_blank">
                                            <p>{{ $checkout->post->link_location }}</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2">
                                        <p>Waktu pengembalian:</p>
                                        <p id="waktu-pengembalian">{{ $checkout->updated_at }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ url('cetak-struk/' . $checkout->id) }}" target="_blank">
                        <button class="btn btnSignIn mb-md-4 shadow" type="submit">Cetak Bukti</button>
                    </a>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
