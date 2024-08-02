<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 (CSS y JS) -->
    @vite(['resources/js/app.js'])
    <title>Compras</title>
</head>
<body>
<x-ma_layout>
<legend>Listado de compras</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Precio</th>
                <th scope="col">Productos</th>
                <th scope="col">Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
            <tr>
                <th scope="row">{{ $compra->id }}</th>
                <td>{{ $compra->fecha }}</td>
                <td>${{ number_format($compra->precio, 2, ","," ") }}</td>
                <td>
                    @foreach($compra->detalles as $det)
                        <p>{{ $det->producto->nombre }} [{{ $det->talle }}] ({{ $det->cantidad }})</p>
                    @endforeach
                </td>
                <td>{{ $compra->email_cliente }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$compras->links()}}
</x-ma_layout>
</body>
</html>