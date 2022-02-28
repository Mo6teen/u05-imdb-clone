<div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        <h1>Watchlist test </h1>
      </div>
      <div class="card-body">
        <form method="post" action="{{url('store-form')}}">
          @csrf
          <input hidden name="movie_id" value="1">
          @auth
          <input hidden name="user_id" value="{{ Auth::user()->id }}">
          @endauth
          <div class="form-group">
          <button type="submit" class="btn btn-primary">+ Watchlist</button>
        </form>
      </div>
    </div>
    @foreach ($watchlists as $watchlist)

    <div class="card my-4">
      <div class="card-header text-center font-weight-bold bg-info">
        {{ $watchlist->user_id }}
      </div>
      <div class="card-body">
        {{ $watchlist->movie_id }}
        {{ $watchlist->movie->title }}
      </div>
    @endforeach
  </div>