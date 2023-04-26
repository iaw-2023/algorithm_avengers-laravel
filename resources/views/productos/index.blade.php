<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Bootstrap Bundle with Popper -->
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <title>Productos</title>
    </head>
    <body>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Talles</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $prod)
                <tr>
                    <th scope="row">{{ $prod->Id }}</th>
                    <td>{{ $prod->nombre }}</td>
                    <td>$ {{ $prod->precio }}</td>
                    <td>
                        <span style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                            {{ $prod->descripcion }}
                        </span>
                    </td>
                    <td>{{ $prod->talles }}</td>
                    <td><img src="{{ $prod->imagen }}" alt="No es posible cargar la imagen" style="max-width:100px;width:100%"></td>
                    <td>Editar | Borrar</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>