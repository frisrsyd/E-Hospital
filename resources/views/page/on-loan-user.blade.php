@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Alat yang sedang dipinjam</label>
                </form>
            </div>
        </div>
        <div class="row">
            @forelse ($checkout as $item)
                <div class="col-md-6 card form-ketersediaan shadow mb-3">
                    <a href="{{ url('on-loan-user/details/' . $item->id) }}">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody class="text-center">
                                    <tr>
                                        <td class="ms-3 float-start">
                                            <p>{{ $item->post->tool_name }}</p>
                                        </td>
                                        <td>
                                            <p>Tanggal Pengembalian(yyyy/mm/dd) : {{ $item->tgl_akhir }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-3 float-start">
                                            <a href="#">
                                                <p>Jumlah: {{ $item->jumlah_pinjam }} buah</p>
                                            </a>
                                        </td>
                                        <td>
                                            <p>Details...</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </a>
                </div>
                <div class="w-100 d-none d-md-block"></div>

            @empty
                <div class="col-md-5 text-center">
                    <h4 class="alert alert-warning mb-2">No On Loan Tool</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
