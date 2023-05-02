CLASS_GROUP_ITEM = "list-group-item";
CLASS_SMALL_BUTTON = "btn btn-danger btn-sm";

function createItem(value, text){
    var item = document.createElement("li");
    item.setAttribute("value", value);
    item.innerText = text;
    item.setAttribute("class", CLASS_GROUP_ITEM);
    
    var boton = document.createElement("button");
    boton.setAttribute("class", CLASS_SMALL_BUTTON);
    boton.innerText = "-";

    item.appendChild(boton);


    document.getElementById("total-categorias").appendChild(item);
}
