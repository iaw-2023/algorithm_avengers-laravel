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
    <input type="text" class="form-control" aria-label="Nombre de la categoria" name="nombre" value="{{ isset($categoria->nombre) ? $categoria->nombre : old('nombre') }}" required>
</div>

<div class="input-group mb-3">
    <span class="input-group-text">Descripción</span>
    <textarea class="form-control" aria-label="Área de texto" name="descripcion">{{ isset($categoria->descripcion) ? $categoria->descripcion : old('descripcion')  }}</textarea>
</div>
<a href="{{ url('categorias/') }}" class="btn btn-danger" onclick="return confirm('¿Descartar cambios y volver?')">Volver</a>