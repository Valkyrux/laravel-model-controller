<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>laravel-model-controller</title>
</head>
<body>
    <h1>{{Route::currentRouteName()}}</h1>
    <div class="container">
        @foreach ($db_movies as $movie)
            <div class="card">
                <h2><small>Titolo: </small>{{$movie->title}}</h2>
                <h2><small>Titolo originale: </small>{{$movie->original_title}}</h2>
                <h3><small>Nazionalit&aacute;: </small>{{$movie->nationality}}</h3>
                <h3><small>Data di uscita: </small>{{date('d/m/Y', strtotime($movie->date))}}</h3>
                <h4><small>Voto: </small>{{$movie->vote}}</h4>
            </div>
        @endforeach
    </div>
</body>
</html>