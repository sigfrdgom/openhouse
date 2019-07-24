// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
//  main view
// ---------------------------------------------------------------------------------------------



// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------


// Una constante para la URL del proyecto

const url = "http://localhost/openhouse/"

// Metodos genericos
function cerrar() {
    document.getElementById('cerrar').click()
}

function confirmarActualizado() {
    swal("Actualizado", "El registro fue actualizado", "success");
}

function confirmarGuardado() {
    swal("Guardado", "El registro fue guardado", "success");
}
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
//      Para gestionar los proyectos y su informacion
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------

// Para mostrar la vista general de proyectos
function mostrarProyectos() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (peticion.readyState == 4) {
            document.getElementById('main-content').innerHTML=this.responseText;
            mostrarTablaProyectos();
            mostrarFormProyecto()
        }
    }
    peticion.open('GET',url+"proyectos/index");
    peticion.send();
}


// Para cargar el elemento tabla
function mostrarTablaProyectos() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (peticion.readyState == 4) {
            document.getElementById('tabla-proyectos').innerHTML=this.responseText;
        }
    }
    peticion.open('GET',url+"proyectos/mostrarTabla");
    peticion.send();
}


// Para cargar el elemento formulario
function mostrarFormProyecto() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (peticion.readyState == 4) {
            document.getElementById('modal-proyectos').innerHTML=this.responseText;
        }
    }
    peticion.open('GET',url+"proyectos/mostrarForm");
    peticion.send();
}

// Para mostrar el elemento formulario con datos especificos
function mostrarFormDataProyecto($id) {
    var peticion= new XMLHttpRequest()
    peticion.onreadystatechange = function () { 
        if (peticion.readyState == 4) {
            document.getElementById('modal-proyectos').innerHTML=this.responseText;
        }
    }
    peticion.open('GET',url+'proyectos/mostrarFormData/'+$id)
    peticion.send()
}


// Parar guardar los proyectos
function guardarProyecto() {
    var nombre = document.getElementById('nombre_proyecto').value
    var descripcion = document.getElementById('descripcion').value
    var cohorte = document.getElementById('cohorte').value
    var nivel = document.getElementById('nivel').value
    
    if (nombre == '' || descripcion == '' || cohorte == '' || nivel == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresas los campos requeridos";
    } else {
        var peticion = new XMLHttpRequest()
        peticion.onreadystatechange = function () {
            if (peticion.readyState == 4) {
                document.getElementById('mensajes').innerHTML="";
                mostrarTablaProyectos();
                mostrarFormProyecto();
                confirmarGuardado();
                cerrar();
            }
        }
        var data = new FormData();
        data.append('nombre',nombre)
        data.append('descripcion',descripcion)
        data.append('cohorte',cohorte)
        data.append('nivel',nivel)

        peticion.open('POST',url+"proyectos/agregar")
        peticion.send(data)
    }
}


// Para guardar lso cambios de una actualizacion de datos
function actualizarProyecto() {
    var nombre = document.getElementById('nombre').value
    var descripcion = document.getElementById('descripcion').value
    var cohorte = document.getElementById('cohorte').value
    var nivel = document.getElementById('nivel').value
    var id = document.getElementById('id_proyecto').value

    if (nombre == '' || descripcion == '' || cohorte == '' || nivel == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa los campos requeridos";
    } else {
        var peticion = new XMLHttpRequest()
        peticion.onreadystatechange = function () {
            if (peticion.readyState == 4) {
                document.getElementById('mensajes').innerHTML="";
                mostrarTablaProyectos();
                mostrarFormProyecto();
                confirmarActualizado();
                cerrar();
            }
        }
        var data = new FormData();
        data.append('nombre',nombre)
        data.append('descripcion',descripcion)
        data.append('cohorte',cohorte)
        data.append('nivel',nivel)
        data.append('id_proyecto',id)

        peticion.open('POST',url+"proyectos/actualizar")
        peticion.send(data)
    }
}


// Para eliminar un proyecto
function eliminarProyecto($id) {

    swal({
        title: "Eliminar",
        text: "¿Estas seguro de que quieres eliminar la pregunta?",
        icon: "warning",
        buttons: ["No","Si!"],
    }).then((value)=>{
        if (value) {
            var peticion = new XMLHttpRequest()
            peticion.onreadystatechange = function () { 
                if (peticion.readyState == 4) {
                    mostrarTablaProyectos();
                }
            }
            var data= new FormData()
            data.append('id_proyecto',$id)
            peticion.open('POST',url+"proyectos/eliminar")
            peticion.send(data)
        }
    })
}


// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
//      Para gestionar los proyectos y su informacion
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
function mostrarPreguntas() {
    var peticion=new XMLHttpRequest()
    peticion.onreadystatechange= function () { 
        if (peticion.readyState == 4) {
            document.getElementById('main-content').innerHTML=this.responseText
            mostrarTablaPreguntas()
            mostrarFormPreguntas()
        }
    }
    peticion.open('GET',url+"preguntas/index")
    peticion.send()
}

function mostrarTablaPreguntas(){
    var peticion=new XMLHttpRequest()
    peticion.onreadystatechange= function () { 
        if (peticion.readyState == 4) {
            document.getElementById('tabla-preguntas').innerHTML=this.responseText
        }
    }
    peticion.open('GET',url+"preguntas/mostrarTabla")
    peticion.send()
}

function mostrarFormPreguntas(){
    var peticion=new XMLHttpRequest()
    peticion.onreadystatechange= function () { 
        if (peticion.readyState == 4) {
            document.getElementById('modal-preguntas').innerHTML=this.responseText
        }
    }
    peticion.open('GET',url+"preguntas/mostrarForm")
    peticion.send()
}

function mostrarFormDataPreguntas($id) {
    var peticion = new XMLHttpRequest()
    peticion.onreadystatechange = function () {
        if (peticion.readyState == 4) {
            document.getElementById('modal-preguntas').innerHTML =this.responseText
        }
    }
    peticion.open('GET',url+"preguntas/mostrarFormData/"+$id)
    peticion.send()
}

function guardarPregunta() {
    var pregunta=document.getElementById('pregunta').value
    var categoria=document.getElementById('categoria').value
    if (pregunta == '' || categoria == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa los valores faltantes"
    } else {
        var peticion = new XMLHttpRequest()
        peticion.onreadystatechange = function () {
            if (peticion.readyState == 4) {
                mostrarFormPreguntas()
                mostrarTablaPreguntas()
                cerrar()
                confirmarGuardado()
            }
        }
        var data = new FormData()
        data.append('pregunta',pregunta)
        data.append('categoria',categoria)
        peticion.open('POST',url+'preguntas/agregar')
        peticion.send(data)
    }
}

function actualizarPregunta() {
    var pregunta=document.getElementById('pregunta').value
    var categoria=document.getElementById('categoria').value
    var id=document.getElementById('id_pregunta').value

    if (pregunta == '' || categoria == '') {
        document.getElementById('mensajes').innerHTML="Por favor ingresa los valores faltantes"
    } else {
        var peticion = new XMLHttpRequest()
        peticion.onreadystatechange = function () {
            if (peticion.readyState == 4) {
                mostrarFormPreguntas()
                mostrarTablaPreguntas()
                cerrar()
                confirmarActualizado()
            }
        }
        var data = new FormData()
        data.append('pregunta',pregunta)
        data.append('categoria',categoria)
        data.append('id_pregunta',id)
        peticion.open('POST',url+'preguntas/actualizar')
        peticion.send(data)
    }
}

function eliminarPregunta(id) {
    swal({
        title: "Eliminar",
        text: "¿Estas seguro de que quieres eliminar la pregunta?",
        icon: "warning",
        buttons: ["No","Si!"],
    })
    .then((value) => {
        if (value) {
            var peticion= new XMLHttpRequest()
            peticion.onreadystatechange = function () {
                if (peticion.readyState == 4) {
                    mostrarTablaPreguntas()
                }
            }
            var data = new FormData()
            data.append('id_pregunta',id)
            peticion.open('POST',url+'preguntas/eliminar')
            peticion.send(data)
        }
    });

}


// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
//      Para gestionar las respuestas
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------

function mostrarRespuestas() {
    var peticion=new XMLHttpRequest()
    peticion.onreadystatechange= function () { 
        if (peticion.readyState == 4) {
            document.getElementById('main-content').innerHTML=this.responseText
            mostrarTablaRespuestas()
        }
    }
    peticion.open('GET',url+"respuestas/index")
    peticion.send()
}

function mostrarTablaRespuestas(){
    var peticion=new XMLHttpRequest()
    peticion.onreadystatechange= function () { 
        if (peticion.readyState == 4) {
            document.getElementById('tabla-respuestas').innerHTML=this.responseText
        }
    }
    peticion.open('GET',url+"respuestas/mostrarTabla")
    peticion.send()
}



// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
//      Para la funcionabilidad de la APP
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------


function mostrarSelectCurso() {
    var peticion = new XMLHttpRequest();
    peticion.onreadystatechange = function () { 
        if (peticion.readyState == 4) {
            document.getElementById('main-content').innerHTML=this.responseText;
        }
    }
    peticion.open('GET',url+"respuestas/mostrarProyectos");
    peticion.send();
}

function cargarCuestionario() {
    var id = document.getElementById('id').value
    if (id == '') {
        swal("Escoge un curso por favor.")
    }else{
        var peticion = new XMLHttpRequest();
        peticion.onreadystatechange = function () { 
            if (peticion.readyState == 4) {
                document.getElementById('main-content').innerHTML=this.responseText;
                document.getElementById('id_proyecto').setAttribute('value',id)
            }
        }
        peticion.open('GET',url+"respuestas/mostrarCuestionario");
        peticion.send();
    }

    
}

