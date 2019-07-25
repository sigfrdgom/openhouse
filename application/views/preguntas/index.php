<div class="container-fluid text-right mt-3">
    <button class="btn btn-success btn-greenu btn-block" data-toggle="modal" data-target="#modal-preguntas" onClick="mostrarFormPreguntas()"> Agregar nueva pregunta </button>
</div>

<div class="mx-2 mt-3 mb-5" >
    <table class="table table-borderless table-responsive-sm table-xl align-middle" style="width: 100%; margin:0 auto">
        <thead class="bg-dark text-white text-center align-middle">
            <tr>
                <!-- <th>ID</th> -->
                <th>PREGUNTA</th>
                <th>CATEGORIA</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody  id="tabla-preguntas">
            
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade align-middle" id="modal-preguntas">
</div>