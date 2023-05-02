<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/form.js') }}"></script>
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

<div class="input-group mb-3">
    <span class="input-group-text">Talles</span>
    <input type="text" class="form-control" aria-label="Lista de talles (separados por ',')" aria-describedby="inputGroup-sizing-default" name="talles" value="{{ isset($producto->talles) ? $producto->talles : '' }}" required>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Categorías</span>    
    
    @if(isset($categorias))
        @foreach($categorias as $cat)
        <select class="form-select" disabled>
            <option selected>{{ $cat }}</option>
            <button type="button" class="btn btn-danger btn-sm">-</button>
        </select>
        @endforeach
    @endif
    
    <select class="form-select">
        <option selected>Agregar categoría</option>
        @foreach($total_categorias as $cats)
        <option value="{{ $cats->id }}">{{ $cats->nombre }}</option>
        @endforeach
    </select>

    <div class="btn-group">
        <button type="button" class="btn btn-primary">+</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            @foreach($total_categorias as $cats)
            <li><button class="dropdown-item" onclick="createItem('{{ $cats->id }}', '{{ $cats->nombre }}')" value="{{ $cats->id }}">{{ $cats->nombre }}</button></li>
            @endforeach
        </ul>
    </div>
    
</div>