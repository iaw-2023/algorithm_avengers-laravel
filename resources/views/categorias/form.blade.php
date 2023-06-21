<div class="input-group mb-3">
    <span class="input-group-text">Nombre</span>
    <input type="text" class="form-control" aria-label="Nombre de la categoria" name="nombre" value="{{ isset($categoria->nombre) ? $categoria->nombre : '' }}" required>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Descripción</span>
    <textarea class="form-control" aria-label="Área de texto" name="descripcion">{{ isset($categoria->descripcion) ? $categoria->descripcion : ''  }}</textarea>
</div>
<a href="{{ url('categorias/') }}" class="btn btn-danger" onclick="return confirm('¿Descartar cambios y volver?')">Volver</a>