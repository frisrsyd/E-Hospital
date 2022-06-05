@extends('app')

@section('content')
    <div class="banner_top">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="container search-container">
            <div class="row">
                <div class="col-md-3 text-center ">
                    <form>
                        <div class="search-control">
                            <input name="search" type="search" class="searchBox" placeholder="Search...."
                                value="{{ request('search') }}">
                            <a href="#" class="searchIcon ms-5">
                                {{-- <img src="img/search.png" alt=""> --}}
                                <button type="submit" class="logoutBtn"><i class="bi bi-search"
                                        style="color: #333333"></i></button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container popular-container">
            <div class="mb-3">
                <div class="row keterangan">
                    <form>
                        <label for="popularTool">Popular Tool</label>
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
                                    <small class="card-text post-caption"
                                        style="font-size: 12px">{{ $item->name }}</small>
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
            <div class="text-center col-md-5">
                <a href="{{ url('all-tools') }}"><button class="btn btnSignIn mb-4 shadow"
                        style="background-color: #FFC839;">Tool Lainnya >></button>
                </a>
            </div>
        </div>
    </div>
@endsection
