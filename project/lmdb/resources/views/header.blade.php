<header>
    <div class="container-fluid" style="background-color: #feba6b;">
        <nav class="navbar navbar-expand-md navbar-light">
            <a style="font-weight:bold; font-size:22px" href="/" class="navbar-brand"><img src="{{asset('images/LMDB_Logo.png')}}" alt="LMDB logo" width="30" height="28" class="d-line-block align-top">
                LMDB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav text-end">
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="top-movies">Top Movies</a>
                    </li>
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="/coming-soon">Coming Soon</a>
                    </li>
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="genres">Browse All Genres</a>
                    </li>
                    @guest
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="{{ route('login') }}">Sign in</a>
                    </li>
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else

                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="{{ route('login') }}">Dashboard</a>
                    </li>
                    <li class="nav-item px-3 py-1">
                        <a class="link-dark text-decoration-none" href="{{ route('signout') }}">Sign out</a>
                    </li>
                    @endguest
                    <li class="nav-item px-3 py-1" style="margin-left: 2rem;">
                        <form class="d-flex" action="{{ url('search') }}" method="get">
                            <input type="search" class="form-control me-2" name="title" placeholder="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</header>