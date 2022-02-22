<header>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="name-logo">
                    <h1>LMDB</h1>
                </div>
                <a href="/">
                    <div class="logo">
                        <img src="{{ asset('images/LMDB_Logo.png') }}" alt="LMDB Logo" id="logo" />
                    </div>
                </a>
                <div class="menu-items">
                    <form class="search-box-desktop" action="{{ url('search-movies') }}" method="POST">
                        @csrf
                        <input class="search-txt" type="text" name="title" placeholder=" Search!">
                        <input type="image" src="{{ asset('images/search.png') }}" alt="Magnifying glass inside search box">
                    </form>
                    <li><a href="#" class="nav-link">News</a></li>
                    <li><a href="/genre" class="nav-link">Browse Genres</a></li>
                    <li><a href="#" class="nav-link">Top Rated</a></li>
                    <li><a href="#" class="nav-link">Coming Soon</a></li>
                    <li><a href="/login" class="nav-link">Sign in/Register</a></li>
                </div>
            </div>
        </div>
    </nav>
</header>