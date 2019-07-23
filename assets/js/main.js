function mostrarTablaCategorias() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4){
            document.getElementById('tbl-categorias').innerHTML=this.responseText;
        }};
        
    request.open('GET',url+'categorias/recargarTabla')
    request.send()}