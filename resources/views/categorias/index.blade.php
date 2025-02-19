<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/categorias.css">

        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
        <title>Categorías</title>
    </head>
    <body>
    <x-ma_layout>
        <legend>Listado de categorías</legend>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad de productos asociados</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $cat)
                <tr>
                    <th scope="row">{{ $cat->id }}</th>
                    <td>{{ $cat->nombre }}</td>
                    <td>
                        <span id="descripcion" style="display: block; text-overflow: ellipsis; max-width: 200px; width: 100%; overflow: hidden; white-space: wrap; max-height: 200px;">
                            {{ $cat->descripcion }}
                        </span>
                    </td>
                    <td>{{ $cat->productos->count() }}</td>
                    <td>
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <form action="{{ url('/categorias/'.$cat->id.'/edit') }}">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </form>
                                        
                            <form action="{{ url('/categorias/'.$cat->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar {{ $cat->nombre }}? También se eliminarán todos los productos pertenecientes a la categoría {{ $cat->nombre }}')" value="Borrar">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="position-fixed bottom-0 start-0 m-3">
            <form action="{{ url('/categorias/create') }}" method="get">
                <input type="submit" class="btn btn-primary" value="+ Nueva categoría">
            </form>
        </div>

        {{$categorias->links()}}
    </x-ma_layout>
    </body>
</html>