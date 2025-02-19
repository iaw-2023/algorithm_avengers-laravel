<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
        <title>Cargar nuevo producto</title>
    </head>
    <body>
    <x-ma_layout>
        <form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
            @csrf
            <legend>Cargar nuevo producto</legend>
            @include('productos.form')

            <input type="submit" class="btn btn-primary" onclick="return confirm('¿Guardar nuevo producto?')" value="Guardar">
        </form>
    </x-ma_layout>
    </body>
</html>