<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Agregar Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
        </div>
        <div class="modal-body" id="form-proyectos">
            <div class="mx-2">
                <input type="hidden" name="id_proyecto" id="id_proyecto">
                <div class="form-group">
                    <label for="nombre" class="font-weigth-bold">Nombre del proyecto</label>
                    <input type="text" class="form-control" name="nombre" id="nombre_proyecto" placeholder="Ingrese nombre del proyectos">
                </div>
                <div class="form-group">
                    <label for="descripcion" class="font-weigth-bold">Descripción del proyecto</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripción del proyectos">
                </div>
                <div class="form-group">
                    <label for="cohorte">Selecciona un COHORTE</label>
                    <select class="form-control" name="cohorte" id="cohorte">
                        <option value="">Seleccione un COHORTE</option>
                        <option value="COHORTE 1">COHORTE 1</option>
                        <option value="COHORTE 2">COHORTE 2</option>
                        <option value="COHORTE 3">COHORTE 3</option>
                        <option value="COHORTE 4">COHORTE 4</option>
                        <option value="COHORTE 5">COHORTE 5</option>
                        <option value="COHORTE 6">COHORTE 6</option>
                        <option value="COHORTE 7">COHORTE 7</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nivel">Selecciona un nivel</label>
                    <select class="form-control" name="nivel" id="nivel">
                        <option value="">Seleccione un nivel</option>
                        <option value="NIVEL 1">Nivel 1</option>
                        <option value="NIVEL 2">Nivel 2</option>
                        <option value="NIVEL 3">Nivel 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="mensajes" class="text-danger text-center mb-2"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger bg-redu" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success bg-greenu" onclick="guardarProyecto()">Guardar</button>
        </div>
    </div>
</div>