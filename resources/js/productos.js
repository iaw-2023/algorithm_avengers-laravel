
function readURL(input) {
    if (input.target.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#producto-img-tag').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.target.files[0]);
    }
}

$("#producto-img").change(function(){
    console.log("EJECUTÓ")
    readURL(this);
});