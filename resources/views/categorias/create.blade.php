<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
        <title>Crear nueva categoría</title>
    </head>
    <body>
    <x-ma_layout>
        <form action="{{ url('/categorias') }}" method="post">
            @csrf
            <legend>Crear nueva categoría</legend>
            @include('categorias.form')

            <input type="submit" class="btn btn-primary" onclick="return confirm('¿Guardar nueva categoría?')" value="Guardar">
        </form>
    </x-ma_layout>
    </body>
</html>