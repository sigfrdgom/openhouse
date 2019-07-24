<!-- Cortar tambien -->
<div class="container ">
<div class="text-center" id="titulo">

</div>
    <form action="<?= base_url('respuestas/agregar')?>" method="post">
        <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
        <table class="table table-reponsive table-borderless border border-secondary mb-3">
            <thead class="bg-medio text-white">
                <tr>
                    <th colspan="6" class="align-middle text-center">Preguntas</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; foreach ($preguntas as $item) { ?>
                <tr>
                    <!-- Un id normal -->
                    <td rowspan="3" class="text-center align-middle border-bottom border-dark font-weight-bold border-right border-secondary">
                        <?= $c ?>
                    </td>
                    <!-- Pregunta -->
                    <td colspan="5" class="text-justify align-middle">
                        <input type="hidden" name="idpregunta[]" value="<?= $item->id_pregunta ?>">
                        <?= $item->pregunta?>
                    </td>
                </tr>
                <?php if ($item->categoria == "COMENTARIO") { ?>
                    <tr rowspam="2" class="text-center align-middle border-bottom border-dark">
                        <td colspan="5">
                              <textarea class="form-control" name="radio-<?= $item->id_pregunta?>" id="" rows="3" placeholder="Escribe aca tu respuesta"></textarea>
                        </td>
                    </tr>
                    <tr rowspam="2"></tr>
                <?php } else{ ?>
                <tr class="bg-claro text-center">
                    <td>Regular</td>
                    <td>Aceptable</td>
                    <td>Bueno</td>
                    <td>Muy bueno</td>
                    <td>Excelente</td>
                </tr>
                <tr class="text-center align-middle border-bottom border-dark" >
                    <td><input type="radio" class="radio-respuestas" name="radio-<?= $item->id_pregunta?>[]" value="1" required></td>
                    <td><input type="radio" class="radio-respuestas" name="radio-<?= $item->id_pregunta?>[]" value="2" required></td>
                    <td><input type="radio" class="radio-respuestas" name="radio-<?= $item->id_pregunta?>[]" value="3" required></td>
                    <td><input type="radio" class="radio-respuestas" name="radio-<?= $item->id_pregunta?>[]" value="4" required></td>
                    <td><input type="radio" class="radio-respuestas" name="radio-<?= $item->id_pregunta?>[]" value="5" required></td>
                </tr>

                <?php } ?>

                <?php $c++; } ?>
            </tbody>
        </table>
        <input type="submit" value="Enviar cuestionario" class="btn btn-success btn-block mb-5">
    </form>
</div>
<!-- Cortar tambien -->