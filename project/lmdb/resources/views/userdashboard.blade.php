@include('header')
@extends('dashboard')

@include('meta')
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
</body>
</html>