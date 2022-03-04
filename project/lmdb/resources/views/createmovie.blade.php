<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>Create movie</title>
</head>

<body>
    <main class="my-5">
        <div class="container mb-10 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <h2 id="handlemovies" style="color: #fd7e14;">Handle movies
                                <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a>
                            </h2>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title text-center">Create Movie</h3>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <!-- Form to add a new movie in the database -->
                            <form action="{{ url('/save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="py-2">
                                    <label for="title-create" class="form-label">Movie Title:</label>
                                    <input type="text" name="title" class="form-control" id="title-crate" placeholder="Add title for the movie">
                                </div>
                                <div class="py-3">
                                    <label for="description" class="form-label">Movie description:</label>
                                    <textarea name="description" class="form-control" id="description" cols="50" rows="4"></textarea>
                                </div>
                                <div class="py-3">
                                    <label for="genre" class="form-label">Genre:</label>
                                    <input type="text" class="form-control" id="genre" name="genre">
                                </div>
                                <div class="py-3">
                                    <label for="release_date" class="form-label">Release date:</label>
                                    <input type="date" id="release_date" class="form-control" name="release_date" min="" max="2024-12-31">
                                </div>
                                <div class="py-3">
                                    <label for="rating" class="form-label">Rating: 1-5</label>
                                    <select name="rating" class="form-select" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="image" class="col-sm-2 col-form-label">Add a movie thumbnail</label>
                                    <input type="file" class="form-control-file" name="image" id="image">
                                </div>
                                <div class="py-3">
                                    <input type="submit" name="submit" class="btn btn-outline-success" id="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    @include('footer')
</body>

</html>