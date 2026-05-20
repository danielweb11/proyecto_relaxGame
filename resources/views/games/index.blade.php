<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>Formulario para registrar un juego nuevo</h1>

        <form action="{{route('games.store')}}" method="post">
            @csrf

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="">
            </div>

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name" id="">Fecha de lanzamiento</label>
                <input type="date" name="fecha_lanzamiento" id="">
            </div>

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name">Está activo?: </label>
                <input type="radio" name="online" value="1" id="">Sí
                <input type="radio" name="online" value="0" id="">No

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>

            
        </form>

    </div>





    <table class="table table striped">
        <thead>
            <th>ID</th>
            <th>Nombre del Juego</th>
            <th>Fecha de Lanzamiento</th>
            <th>Activo</th>
        </thead>

        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->release_date}}</td>
                    <td>{{$game->is_online}}</td>
                    <td>
                        <a href="{{route('games.show',$game->id)}}" class="btn btn-warning" class="btn btn-warning">Detalles</a>
                        <a href="{{route('games.edit',$game->id)}}" class="btn btn-warning" class="btn btn-warning">Editar</a>

                        <form action="{{route('games.destroy',$game->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    
                </tr>

            @endforeach
        </tbody>

    </table>
    
</body>
</html>