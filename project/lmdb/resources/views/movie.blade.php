<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMDB - {{ $movie->title }}</title>
</head>
<body>
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>{{ $movie->actors }}</p>
    <p>{{ $movie->genre }}</p>
</body>
</html>