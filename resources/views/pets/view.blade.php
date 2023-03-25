<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Pet #{{ $pet->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $pet->nome }} - {{ $pet->raca }}</h1>

            @if($pet->sexo == 'F')
                <h2>Menina</h2>
            @elseif($pet->sexo == 'M')
                <h2>Menino</h2>
            @elseif($pet->sexo == 'E')
                <h2>Menine</h2>
            @endif

            <h3>{{ $pet->idade }} anos</h3>

            <h3>Pelos {{ $pet->cor }}</h3>

            <p>
                {{ $pet->petsgrafia }}
            </p>

            <a href="{{ route('pets.index') }}">Voltar a lista</a>
        </div>
    </body>
</html>

