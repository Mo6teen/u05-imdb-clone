<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMDB - {{ $movie->title }}</title>
</head>
<body>
    <header>

    </header>

    <main>
        <div>
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->genre }}</p>
            <p><!--Add rating--></p>
        </div>

        <!--Image section-->
        <section>
            <img src="" alt="">
            <div>
                <button>+ Watchlist</button>
            </div>
        </section>

        <!--Description of item-->
        <section>
            <div>
                <h2>Description</h2>
                <p>{{ $movie->description }}</p>
            </div>
        </section>

        <!--Section for cast list-->
        <section>
            <div>
                <h2>Cast</h2>
                <p>{{ $movie->actors }}</p>
            </div>
        </section>

        <!-- Section to write and read reviews -->
        <section>
            <h2>Reviews</h2>
            <!-- Add reviews form -->
        </section>
    </main>

    <footer></footer>
</body>
</html>