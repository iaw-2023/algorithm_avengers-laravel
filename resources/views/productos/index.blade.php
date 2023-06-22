<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">

        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
        <title>Productos</title>
    </head>
    <body>
    <x-ma_layout>
        <legend>Listado de productos</legend>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" id="precio">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Talles</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $prod)
                <tr>
                    <th scope="row">{{ $prod->id }}</th>
                    <td>{{ $prod->nombre }}</td>
                    <td>$ {{ number_format($prod->precio, 2, ',',' ') }}</td>
                    <td>
                        <span id="descripcion">
                            {{ $prod->descripcion }}
                        </span>
                    </td>
                    <td>{{ $prod->talles }}</td>
                    <td> {{ $prod->categoria_prod->nombre }} </td>
                    <td><img src="{{ $prod->imagen }}" class="rounded mx-auto d-block" alt="No es posible cargar la imagen" id="imagen"</td>
                    <td>
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <form action="{{ url('/productos/'.$prod->id.'/edit') }}">
                                <input type="submit" class="btn btn-primary" value="Editar">
                            </form>
                                        
                            <form action="{{ url('/productos/'.$prod->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar {{ $prod->nombre }}?')" value="Borrar">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ url('/productos/create') }}" method="get">
            <input type="submit" class="btn btn-primary" value="+ Nuevo producto">
        </form>
    </x-ma_layout>
    </body>
    
</html>