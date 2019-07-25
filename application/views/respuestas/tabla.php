<?php foreach ($respuestas as $item) { ?>
    <tr class="border-bottom border-dark">
    <!-- <td>1</td> -->
        <!-- <td><?= $item->id_respuesta ?></td> -->
        <!-- <td><?= $item->id_proyecto ?></td> -->
        <td  class="align-middle"><?= $item->nombre ?></td>
        <!-- <td><?= $item->id_pregunta ?></td> -->
        <td  class="align-middle"><?= $item->pregunta ?></td>
        <td class="text-center font-weight-bold align-middle"><?= $item->calificacion ?></td>
        
        <!-- <td  class="align-middle"><button class="btn btn-block btn-warning bg-orangeu" 
        data-toggle="modal" data-target="#modal-respuestas" onclick="mostrarFormDataRespuesta(<?= $item->id_respuesta ?>)">Editar</button></td> -->
        <td  class="align-middle"><button class="btn btn-block btn-danger bg-redu" onclick="eliminarRespuesta(<?= $item->id_respuesta ?>)">Eliminar</button></td>
    </tr>
<?php } ?>