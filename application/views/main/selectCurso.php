<!-- cortar luego  -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-12">
            <label for="cursos" class="font-weight-bold">Proyectos en OPEN HOUSE CDS Santa Ana</label>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-9 col-12">
            <select class="form-control" name="cursos" id="id">
                <option value="">Seleccione un proyecto</option>
                <?php foreach ($proyectos as $item) { ?>
                    <option value="<?= $item->id_proyecto?>"><?= $item->nombre?></option>
                <?php } ?>
                
                
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-12">
            <button name="responder" id="responder" class="btn btn-primary btn-block" type="button" onclick="cargarCuestionario()">Responder</button>
        </div>
        
    </div>
</div>

<div id="cuestionario">
</div>
<!-- cortar luego -->