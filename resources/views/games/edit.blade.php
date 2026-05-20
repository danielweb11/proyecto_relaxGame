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
        <h1>Vista para cambiar o actualizar datos</h1>

        <form action="{{route('games.update', $game->id)}}" method="post">
            @csrf
            @method('put')

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name" >Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$game->name}}" id="">
            </div>

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name" id="">Fecha de lanzamiento</label>
                <input type="date" name="fecha_lanzamiento" value="{{\Carbon\Carbon::parse($game->release_date)->format('Y-m-d')}}"id="">
            </div>

            <div class=" input-group mb-3">
                <label class="input-group-text" for="name">Está activo?: </label>
                <input type="radio" name="online" value="1" {{$game->is_online == 1 ? 'checked' : ''}} id="">Sí
                <input type="radio" name="online" value="0" {{$game->is_online == 0 ? 'checked' : ''}} id="">No

            </div>

            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>

            
        </form>

    </div>
</body>
</html>