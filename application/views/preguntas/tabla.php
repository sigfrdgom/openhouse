<?php foreach ($preguntas as $pregunta) { ?>
    <tr class="border-bottom border-dark">
    <!-- <td>1</td> -->
        <td><?= $pregunta->pregunta ?></td>
        <td  class="align-middle"><?= $pregunta->categoria ?></td>
        <td class="align-middle"><button class="btn btn-block btn-warning bg-orangeu" 
        data-toggle="modal" data-target="#modal-preguntas" onclick="mostrarFormDataPreguntas(<?= $pregunta->id_pregunta ?>)">Editar</button></td>
        <td class="align-middle"><button class="btn btn-block btn-danger bg-redu" onclick="eliminarPregunta(<?= $pregunta->id_pregunta ?>)">Eliminar</button></td>
    </tr>
<?php } ?>