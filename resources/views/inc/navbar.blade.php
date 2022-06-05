<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #FFEFD9;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" height="44" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto" style="background-color: transparent;" id="fitur_bg">
                <div class="navbar-nav m-auto align-items-center" id="fitur">
                    @auth
                        <a class="btn btn-grey" href="{{ url('notifikasi') }}"><img
                                src="{{ asset('img/Notifications.png') }}" alt="notifikasi">
                            Notifications</a>
                        <a class="btn bg-gradient-primary" href="{{ url('history-pinjam') }}"><i
                                class="bi bi-clock-history"></i> History</a>
                        <a href="{{ url('on-loan-user') }}" class="btn" style="color: black"><img
                                src="{{ asset('img/on-loan.png') }}" alt=""> On Loan</a>
                    @endauth
                    <a href="{{ url('account') }}" class="btn" style="color: black"><img
                            src="{{ asset('img/account.png') }}" height="33" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</nav>
