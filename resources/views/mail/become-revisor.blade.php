<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>riarreda</title>
</head>
<body>
    <div>
        <h1>
            Un utente ha chiesto di lavorare con noi
        </h1>
        <h2>Ecco i supi dati:</h2>
        <p>Nome: {{$user->name}} </p>
        <p>Email: {{$user->email}} </p>
        <p>Se vuoi renderl* revisor, clicca qui:</p>
        <a href="{{route('make.revisor', compact('user'))}}">Rendi revisor</a>
    </div>
</body>
</html>