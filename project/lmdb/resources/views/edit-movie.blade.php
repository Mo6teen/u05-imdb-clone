<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Edit movie</title>
</head>

<body>
    <main>
        <div class="container my-5">
            <div class="card-header">
                <h2>Edit movie
                    <a href="{{ url('movie/'.$movie->title) }}" class="btn btn-dark float-end">BACK</a>
                </h2>
            </div>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <!-- Form to edit a movie -->
            <div class="card-body">
                <form action="{{ url('edit-movie/'.$movie->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input hidden name="id" value="{{ $movie->id }}">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{ $movie->title }}">
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control">{{ $movie->description }}</textarea>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="genre" class="col-sm-2 col-form-label">Genre:</label>
                    <div class="col-sm-10">
                        <input type="text" name="genre" class="form-control" value="{{ $movie->genre }}">
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rating" class="col-sm-2 col-form-label">Rating:</label>
                    <div class="col-sm-10">
                        <select name="rating" value="{{ $movie->rating }}" class="form-select">
                            <option value="{{ $movie->rating }}">{{ $movie->rating }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-warning">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
    @include('footer')
</body>

</html>