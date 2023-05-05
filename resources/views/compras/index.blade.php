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
    <title>Compras</title>
</head>
<body>
<x-app-layout>
<legend>Listado de compras</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Precio</th>
                <th scope="col">Productos</th>
                <th scope="col">Cliente</th>
                <th scope="col">Dirección de entrega</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
            <tr>
                <th scope="row">{{ $compra->id }}</th>
                <td>{{ $compra->fecha }}</td>
                <td>${{ number_format($compra->precio, 2, ","," ") }}</td>
                <td>
                    @foreach($productos_compra[$compra->id] as $prod)
                        <p>{{ $prod->nombre_producto }} ({{ $prod->cantidad }})</p>
                    @endforeach
                </td>
                <td>{{ $compra->email_cliente }}</td>
                <td>{{ $compra->direccion_entrega }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
</body>
</html>