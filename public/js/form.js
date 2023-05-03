function validarTalles(talles_validos, talles_actual){
    talles = talles_actual.toUpperCase();
    talles = talles.replaceAll(/\s/, '');
    
    console.log(talles_validos.includes(talles));

    return talles_validos.includes(talles);
}
