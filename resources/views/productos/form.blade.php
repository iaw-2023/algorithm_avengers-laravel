<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/form.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>


<div class="input-group mb-3">
    <span class="input-group-text">Nombre</span>
    <input type="text" class="form-control" aria-label="Nombre del producto" name="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : '' }}" required>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Descripción</span>
    <textarea class="form-control" aria-label="Área de texto" name="descripcion">{{ isset($producto->descripcion) ? $producto->descripcion : ''  }}</textarea>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Precio</span>
    <span class="input-group-text">$</span>
    <input type="number" step="0.01" class="form-control" aria-label="Precio en pesos, con punto y dos decimales" name="precio" value="{{ isset($producto->precio) ? $producto->precio : '' }}" required>
</div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">URL imagen</span>
        <input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="imagen" value="{{ isset($producto->imagen) ? $producto->imagen : '' }}">
        @if(isset($producto->imagen))
        <img src="{{ $producto->imagen }}" class="rounded float-end" alt="" style="max-width:100px;width:100%">
        @endif
    </div>
    

<div>
    <div class="input-group mb-3">
        <span class="input-group-text">Talles</span>
        <input type="text" class="form-control" autocapitalize="characters" pattern="{{ '('.implode(')?,?(', $talles_validos).')?' }}" aria-label="Lista de talles (separados por ',')" aria-describedby="inputGroup-sizing-default" name="talles" value="{{ isset($producto->talles) ? $producto->talles : '' }}" required>
    </div>
    <p class="text-body-secondary fs-6" id="talles_validos">
    Los talles válidos son {{ implode(", ", $talles_validos) }} en ese orden y separados por "," (coma)
    
    </p>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Categorías</span>    
       
    <select class="form-select" name="categoria">
        @if(!isset($producto->categoria))
            <option selected>Seleccionar categoría</option>
        @endif

        @foreach($total_categorias as $cats)
            @if(isset($producto->categoria) && ( $producto->categoria == $cats->id ))
                <option selected value="{{ $cats->id }}">{{ $cats->nombre }}</option>    
            @else
                <option value="{{ $cats->id }}">{{ $cats->nombre }}</option>
            @endif
        @endforeach
    </select>    
</div>

<a href="{{ url('productos/') }}" class="btn btn-primary" onclick="return confirm('¿Descartar cambios y volver?')">Volver</a>