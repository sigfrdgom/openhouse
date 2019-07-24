<?php foreach ($proyectos as $proyecto) { ?>
    <tr >
    <!-- <td>1</td> -->
        <td class="font-weight-bold"><?= $proyecto->nombre ?></td>
        <td class="text-center"><?= $proyecto->cohorte ?></td>
        <td><?= $proyecto->nivel ?></td>
        <td rowspan="2" class="align-middle border-bottom border-dark"><button class="btn btn-block btn-warning bg-orangeu" 
        data-toggle="modal" data-target="#modal-proyectos" onclick="mostrarFormDataProyecto(<?= $proyecto->id_proyecto ?>)">Editar</button></td>
        <td rowspan="2" class="align-middle border-bottom border-dark"><button class="btn btn-block btn-danger bg-redu" onclick="eliminarProyecto(<?= $proyecto->id_proyecto ?>)">Eliminar</button></td>
    </tr>
    <tr class="border-bottom border-dark">
        <td colspan="3">DESCRIPCIÓN: <?= $proyecto->descripcion?></td>
    </tr>
<?php } ?>