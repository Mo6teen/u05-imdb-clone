<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
    <title>LMDB - Dashboard</title>
</head>

<body>
    @section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 style="color: #fd7e14;">Hi {{ Auth::user()->name }}</h1>
                        </div>
                        <h4 class="card-title dashboard-title">Welcome to your dashboard</h4>
                        <h5 class="card-subtitle">You are signed in as admin</h5>
                        <div class="card-body">
                            <h5 class="card-title">Here you can:</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/handleusers">Handle users</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/handlereviews">Handle reviews</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/createmovie">Handle movies</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/mywatchlist">Handle your watchlist</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/customlists">Handle other lists</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/usersettings">Manage your settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    @include('footer')
    @endsection
</body>

</html>