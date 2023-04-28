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
            <div class="input-group mb-3">
                <span class="input-group-text">Nombre</span>
                <input type="text" class="form-control" aria-label="Nombre del producto" name="nombre">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Descripción</span>
                <textarea class="form-control" aria-label="Área de texto" name="descripcion"></textarea>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Precio</span>
                <span class="input-group-text">$</span>
                <input type="number" step="0.01" class="form-control" aria-label="Precio en pesos, con punto y dos decimales" name="precio">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">URL imagen</span>
                <input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="imagen">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Talles</span>
                <input type="text" class="form-control" aria-label="Lista de talles (separados por ',')" aria-describedby="inputGroup-sizing-default" name="talles">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>