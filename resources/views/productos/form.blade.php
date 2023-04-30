<div class="input-group mb-3">
    <span class="input-group-text">Nombre</span>
    <input type="text" class="form-control" aria-label="Nombre del producto" name="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : '' }}">
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Descripción</span>
    <textarea class="form-control" aria-label="Área de texto" name="descripcion">{{ isset($producto->descripcion) ? $producto->descripcion : ''  }}</textarea>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Precio</span>
    <span class="input-group-text">$</span>
    <input type="number" step="0.01" class="form-control" aria-label="Precio en pesos, con punto y dos decimales" name="precio" value="{{ isset($producto->precio) ? $producto->precio : '' }}">
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
    <input type="text" class="form-control" aria-label="Lista de talles (separados por ',')" aria-describedby="inputGroup-sizing-default" name="talles" value="{{ isset($producto->talles) ? $producto->talles : '' }}">
</div>