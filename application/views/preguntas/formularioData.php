<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar pregunta</h5>
                <button type="button" class="close" data-dismiss="modal" id="cerrar">
                    <span>&times;</span>
                </button>
        </div>
        <div class="modal-body" id="form-preguntas">
            <div class="mx-2">
                <input type="hidden" name="id_pregunta" id="id_pregunta" value="<?= $preguntas[0]->id_pregunta?>">
                <div class="form-group">
                    <label for="nombre" class="font-weigth-bold">Pregunta</label>
                    <textarea style="text-align: justify;" class="form-control" name="pregunta" id="pregunta" cols="30" rows="5" 
                    placeholder="Ingresa la pregunta o cuestionamiento"><?= $preguntas[0]->pregunta?></textarea>
                </div>
                <div class="form-group">
                    <label for="categoria">Selecciona una categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="">Seleccione una categoria</option>
                        <option value="DISEÑO" <?=($preguntas[0]->categoria == "DISEÑO")?"selected":"" ?>>DISEÑO</option>
                        <option value="PRESENTACION" <?=($preguntas[0]->categoria == "PRESENTACION")?"selected":"" ?>>PRESENTACION</option>
                        <option value="MANEJO" <?=($preguntas[0]->categoria == "MANEJO")?"selected":"" ?>>MANEJO DEL TEMA</option>
                        <option value="FUNCIONABILIDAD" <?=($preguntas[0]->categoria == "FUNCIONABILIDAD")?"selected":"" ?>>FUNCIONABILIDAD</option>
                        <option value="COMENTARIO" <?=($preguntas[0]->categoria == "COMENTARIO")?"selected":"" ?>>COMENTARIO</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="mensajes" class="text-danger text-center mb-2"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger bg-redu" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success bg-greenu" onclick="actualizarPregunta()">Guardar</button>
        </div>
    </div>
</div>