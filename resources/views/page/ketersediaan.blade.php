@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Ketersediaan Alat</label>
                </form>
            </div>
        </div>
        <div class="row">
            @forelse ($post as $item)
                <div class="col-md-6 card form-ketersediaan shadow mb-3">
                    <a href="rekap-pinjam/{{ $item->id }}">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody class="text-center">
                                    <tr>
                                        <td class="ms-3 float-start">
                                            <p>{{ $item->tool_name }}</p>
                                        </td>
                                        <td class=" tect-center">
                                            <p>{{ $item->status }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ms-3 float-start">
                                            <a href="{{ $item->link_location }}" target="_blank">
                                                <p>{{ $item->link_location }}</p>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <p>Jumlah: {{ $item->jumlah_alat }} buah</p>
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
                    <h4 class="alert alert-warning mb-2">Tidak Ada Alat Yang Tersedia</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
