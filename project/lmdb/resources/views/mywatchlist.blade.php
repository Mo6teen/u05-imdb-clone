<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Watchlist</title>
</head>

<body>
    <main>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 id="handlewatchlist" style="color: #fd7e14;">Your watchlist
                                @if(Auth::user()->role == 1)
                                <a href="{{ url('userdashboard') }}" class="btn btn-dark float-end">BACK</a>
                            </h2>
                            @elseif(Auth::user()->role == 0)
                            <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                            @endif
                        </div>
                        <section class="table-responsive">
                            <div class="card-body text-center">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Movie title</th>
                                            <th>Genre</th>
                                            <th>Rating</th>
                                            <th>Release date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($watchlists as $watchlist)
                                        <tr>
                                            <td>
                                                <a href="{{ url('movie/' . $watchlist->movie->title)}}">
                                                    {{ $watchlist->movie->title }}
                                                </a>
                                            </td>
                                            <td> {{ $watchlist->movie->genre }}</td>
                                            <td> {{ $watchlist->movie->rating }}</td>
                                            <td> {{ $watchlist->movie->release_date }}</td>
                                            <td>
                                                <a class="btn btn-danger btn-sm" href="{{ url('mywatchlist/delete/' . $watchlist->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="py-5 my-5"></div>
            <div class="py-5 my-5"></div>
            <div class="py-5 my-5"></div>
    </main>
    @include('footer')
</body>

</html>