<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Agregar pregunta</h5>
                <button type="button" class="close" id="cerrar" data-dismiss="modal">
                    <span>&times;</span>
                </button>
        </div>
        <div class="modal-body" id="form-preguntas">
            <div class="mx-2">
                <input type="hidden" name="id_pregunta" id="id_pregunta">
                <div class="form-group">
                    <label for="nombre" class="font-weigth-bold">Pregunta</label>
                    <textarea class="form-control" name="pregunta" id="pregunta" cols="30" rows="5" placeholder="Ingresa la pregunta o cuestionamiento"></textarea>
                    <!-- <input type="text" class="form-control" name="nombre" id="nombre_pregunta" > -->
                </div>
                <div class="form-group">
                    <label for="categoria">Selecciona una categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="">Seleccione una categoria</option>
                        <option value="DISEÑO">DISEÑO</option>
                        <option value="PRESENTACION">PRESENTACION</option>
                        <option value="MANEJO">MANEJO DEL TEMA</option>
                        <option value="FUNCIONABILIDAD">FUNCIONABILIDAD</option>
                        <option value="COMENTARIO">COMENTARIO</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="mensajes" class="text-danger text-center mb-2"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger bg-redu" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success bg-greenu" onclick="guardarPregunta()">Guardar</button>
        </div>
    </div>
</div>