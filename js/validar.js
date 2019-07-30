function valida() {
    
    var nombre, apellido, correo, contacto, mensaje, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    contacto = document.getElementById("contacto").value;
    mensaje = document.getElementById("mensaje").value;

    expresion = /\w+@\w+\.+[a-z]/;
    if(nombre === "" || apellido === "" || correo === "" || contacto === "" || mensaje === ""){
        alert("Todos los campos son obligarorios");
        return false;
    }
    else if(nombre.length > 30){
        alert("el nombre es muy largo");
        return false;
    }
    else if(apellido.length > 30){
        alert("los apellidos son muy largo");
        return false;
    }
    else if(correro.length > 100){
        alert("el correro es muy largo");
        return false;
    }
    else if(!expresion.test(correro)){
        alert("el correro no es valido");
        return false;
    }
    else if(contacto.length > 10){
        alert("el telefono es muy largo");
        return false;
    }
    else if(contacto.length < 9){
        alert("el telefono es muy corto");
        return false;
    }

}