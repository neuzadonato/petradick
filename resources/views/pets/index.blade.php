<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Pets</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Pets</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('pets.create') }}">Novo Pet</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>raca</th>
                    <th>idade</th>                    
                    <th>Sexo</th>
                    <th>Cor</th>
                    <th>petgrafia</th>
                    <th>foto</th>              

                    <th></th>                  

                </tr>

                @foreach ($pets as $pet)
                    <tr>
                        <td>{{ $fa-pull-left->nome }}</td>
                        <td>{{ $pet->cor }}</td>
                        <td>{{ $pet->sexo }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
