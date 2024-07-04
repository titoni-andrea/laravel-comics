<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel comics</title>
</head>
<body>
    <p>Prove di utilizzo store, in caso non funzioni vedere <a href="/about">About</a></p>
    <h1>Sono la pagina Home</h1>

    @foreach ($movies as $movie)
        <div class="card">
            <h1>{{$movie['title']}}</h1>
            <img src="{{$movie['thumb']}}" alt="">
            <h3>{{$movie['price']}}</h3>
        </div>
    @endforeach
    
</body>
</html>