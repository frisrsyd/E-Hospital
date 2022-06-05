@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">All Tools</label>
                </form>
            </div>
        </div>
        <div class="row">
            @forelse ($categories as $item)
                <div class="col-md-1 card card-post shadow me-2">
                    <a href="ketersediaan-tool/{{ $item->id }}">
                        <img src="img/icon/{{ $item->slug }}.png" class="card-img-top">
                        <div class="card-body">
                            <p class="mb-2 profile">
                            <div class="row text-center">
                                <small class="card-text post-caption" style="font-size: 12px">{{ $item->name }}</small>
                            </div>
                            </p>
                        </div>
                    </a>
                </div>
                @if ($loop->iteration % 5 == 0)
                    <div class="w-100 d-none d-md-block"></div>
                @endif
            @empty
                <div class="col-md-5 text-center">
                    <h4 class="alert alert-warning mb-2">No Popular Tool</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
