<!DOCTYPE html>
<html>

<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navbar-expand-sm mb-5" style="background-color: #feba6b;">
        <div class="container">
            <!-- <a class="navbar-brand mr-auto" href="/">Home</a> -->
            <!-- <div class="" id="navbarNav"> -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="link-dark text-decoration-none" style="font-weight:bold; font-size:22px" href="/">Home</a>
                </li>
                @guest
                <li class="nav-item px-5 py-1">
                    <a class="link-dark text-decoration-none" href="{{ route('login') }}">Sign in</a>
                </li>
                <li class="nav-item py-1">
                    <a class="link-dark text-decoration-none" href="{{ route('register-user') }}">Register</a>
                </li>
                @else

                <li class="nav-item px-5 py-1">
                    <a class="link-dark text-decoration-none" href="{{ route('login') }}">Dashboard</a>
                </li>
                <li class="nav-item py-1">
                    <a class="link-dark text-decoration-none" href="{{ route('signout') }}">Sign out</a>
                </li>
                @endguest
            </ul>
            <!-- </div> -->
        </div>
    </nav>
    @yield('content')
</body>

</html>