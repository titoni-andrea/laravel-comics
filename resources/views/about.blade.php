<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About comics</title>
</head>
<body>

    <p>Per tornare in <a href="/">Home</a></p>

    <h1>Sono la pagina di About</h1>

    <h2>Mi chiamo {{$nome}} {{$cognome}}</h2>

    <h3>Le mie mail preferite sono:</h3>
    @foreach ($typeMail as $mail)
        <li>{{$mail}}</li>
    @endforeach
</body>
</html>