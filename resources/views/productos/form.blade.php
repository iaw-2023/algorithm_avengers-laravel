<link rel="stylesheet" type="text/css" href="{{ asset('css/productos.css') }}">

<!-- Bootstrap 5 (CSS y JS) -->
@vite(['resources/js/app.js'])

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

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
    <input type="number" min="0" step="0.01" class="form-control" aria-label="Precio en pesos, con punto y dos decimales" name="precio" value="{{ isset($producto->precio) ? $producto->precio : '' }}" required>
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
    
    <select required class="form-select" name="categoria_id">
        @if(!isset($producto->categoria_id))
            <option selected value="">Seleccione una categoría</option>    
        @endif  
        
        @foreach($total_categorias as $cats)
            @if(isset($producto->categoria_id) && ( $producto->categoria_id == $cats->id ))
                <option selected value="{{ $cats->id }}">{{ $cats->nombre }}</option>    
            @else
                <option value="{{ $cats->id }}">{{ $cats->nombre }}</option>
            @endif
        @endforeach
    </select>    
</div>

<a href="{{ url('productos/') }}" class="btn btn-danger" onclick="return confirm('¿Descartar cambios y volver?')">Volver</a>