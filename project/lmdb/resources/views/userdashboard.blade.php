@include('header')
@extends('dashboard')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="{{ url('js/script.js') }}" defer></script>
    <title>Dashboard</title>
</head>
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: #fd7e14;">Hi {{ Auth::user()->name }}</h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <h4 class="card-title dashboard-title">Welcome to your dashboard</h4>
                        <div class="card-body">
                            <h5 class="card-title">Here you can:</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/mywatchlist">Handle your watchlist</a>
                            </li>
                            <li class="list-group-item h5">
                                <a class="link-dark" href="/myotherlists">Handle other lists</a>
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
@endsection