<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap 5 (CSS y JS) -->
    @vite(['resources/js/app.js'])
    <title>Clientes</title>
</head>
<body>
<x-ma_layout>
    <legend>Listado de clientes</legend>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Cantidad de compras</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <th scope="row">{{ $cliente->id }}</th>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->domicilio }}</td>
                <td>{{ $cliente->compras->count() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-ma_layout>
</body>
</html>