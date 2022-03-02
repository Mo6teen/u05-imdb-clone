<header>
    <nav>
        <div class="nav-bar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="name-logo">
                    <!-- inline styling works for link getting link big size, can change if we found something better -->
                    <h1><a class="link-dark text-decoration-none" style="font-size: 2.5rem;" href="/">LMDB</a></h1>
                </div>
                <a href="/">
                    <div class="logo">
                        <img src="{{ asset('images/LMDB_Logo.png') }}" alt="LMDB Logo" id="logo" />
                    </div>
                </a>
                <div class="menu-items">
                    <form class="search-box-desktop" action="{{ url('search') }}" method="get">
                        @csrf
                        <input class="search-txt" type="text" name="title" placeholder=" Search!">
                        <input type="image" class="search-button" src="{{ asset('images/search.png') }}" alt="Magnifying glass inside search box">
                    </form>
                    <ul>
                        <li><a href="/genres" class="nav-Link">Browse Genres</a></li>
                        <li><a href="/top-movies" class="nav-Link">Top Rated</a></li>
                        <li><a href="/login" class="nav-Link">Sign in/Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>