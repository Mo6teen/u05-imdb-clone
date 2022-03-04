<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Dashboard</title>
</head>
<main class="py-5 my-5">
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h1" style="color: #fd7e14;">Hi {{ Auth::user()->name }}</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <h3 class="card-title dashboard-title h2">Welcome to your dashboard</h3>
                        <div class="card-body">
                            <h4 class="card-title h3">Here you can:</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/mywatchlist">Handle your watchlist</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/customlists">Handle other lists</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="usersettings">Manage your settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</main>
@include('footer')
</body>

</html>