inputImagen.onchange = evt => {
    const [file] = inputImagen.files
    if (file) {
        imagenProducto.src = URL.createObjectURL(file);
    }
}