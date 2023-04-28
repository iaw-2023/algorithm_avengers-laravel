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
        <title>Cargar nuevo producto</title>
    </head>
    <body>
        <form action="{{ url('/productos') }}" method="post">
            @csrf
            <legend>Cargar nuevo producto</legend>
            @include('productos.form');

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>