<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Editar proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" id="cerrar">
                    <span>&times;</span>
                </button>
        </div>
        <div class="modal-body" id="form-proyectos">
            <div class="mx-2">
                <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?= $proyectos[0]->id_proyecto ?>">
                <div class="form-group">
                    <label for="nombre" class="font-weigth-bold">Nombre del proyectosss</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre del proyectos"
                    value="<?= $proyectos[0]->nombre?>">
                </div>
                <div class="form-group">
                    <label for="descripcion" class="font-weigth-bold">Descripción del proyecto</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripción del proyectos"
                    value="<?= $proyectos[0]->descripcion?>">
                </div>
                <div class="form-group">
                    <label for="cohorte">Selecciona un COHORTE</label>
                    <select class="form-control" name="cohorte" id="cohorte">
                        <option value="">Seleccione un COHORTE</option>
                        <option value="COHORTE 1" <?=($proyectos[0]->cohorte == "COHORTE 1")?"selected":"" ?>>COHORTE 1</option>
                        <option value="COHORTE 2" <?=($proyectos[0]->cohorte == "COHORTE 2")?"selected":"" ?>>COHORTE 2</option>
                        <option value="COHORTE 3" <?=($proyectos[0]->cohorte == "COHORTE 3")?"selected":"" ?>>COHORTE 3</option>
                        <option value="COHORTE 4" <?=($proyectos[0]->cohorte == "COHORTE 4")?"selected":"" ?>>COHORTE 4</option>
                        <option value="COHORTE 5" <?=($proyectos[0]->cohorte == "COHORTE 5")?"selected":"" ?>>COHORTE 5</option>
                        <option value="COHORTE 6" <?=($proyectos[0]->cohorte == "COHORTE 6")?"selected":"" ?>>COHORTE 6</option>
                        <option value="COHORTE 7" <?=($proyectos[0]->cohorte == "COHORTE 7")?"selected":"" ?>>COHORTE 7</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nivel">Selecciona un nivel</label>
                    <select class="form-control" name="nivel" id="nivel">
                        <option value="">Seleccione un nivel</option>
                        <option value="NIVEL 1" <?=($proyectos[0]->nivel == "NIVEL 1")?"selected":"" ?> >Nivel 1</option>
                        <option value="NIVEL 2" <?=($proyectos[0]->nivel == "NIVEL 2")?"selected":"" ?>>Nivel 2</option>
                        <option value="NIVEL 3" <?=($proyectos[0]->nivel == "NIVEL 3")?"selected":"" ?>>Nivel 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="mensajes" class="text-danger text-center mb-2"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger bg-redu" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success bg-greenu" onclick="actualizarProyecto()" >Guardar cambios</button>
        </div>
    </div>
</div>