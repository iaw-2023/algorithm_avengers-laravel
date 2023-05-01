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
        <title>Crear nueva categoría</title>
    </head>
    <body>
        <form action="{{ url('/categorias') }}" method="post">
            @csrf
            <legend>Crear nueva categoría</legend>
            @include('categorias.form');

            <input type="submit" class="btn btn-primary" onclick="return confirm('¿Guardar nueva categoría?')" value="Guardar">
        </form>
    </body>
</html>