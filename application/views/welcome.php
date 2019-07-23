<!DOCTYPE html>
<html lang="es-SV">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Open House Santa Ana &starf;</title>

	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?>" type="image/x-icon">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- CSS propio -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">


</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-blueu" >
		<a class="navbar-brand font-weight-bold" href="<?= base_url()?>">OpenHouse CDS Santa Ana &starf;</a>
		<button class="navbar-toggler d-lg-none font-weight-bolder active" type="button" data-toggle="collapse" data-target="#collapsibleNavId" >&equiv;</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">

			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item dropdown bg-blueu " >
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrar</a>
					<div class="dropdown-menu bg-blueu" aria-labelledby="dropdownId">
						<a class="dropdown-item text-white" onClick="mostrarProyectos()">Proyectos</a>
						<a class="dropdown-item text-white" onClick="mostrarPreguntas()">Preguntas</a>
						<a class="dropdown-item text-white" onClick="mostrarRespuestas()">Respuestas</a>
					</div>
				</li>
			</ul>

		</div>
	</nav>

	<!-- El contenedor principal -->
	<div class="container-fluid mt-5 mb-5" id="main-content">
			<!-- cortar luego  -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-12">
						<label for="cursos" class="font-weight-bold">Proyectos en OPEN HOUSE CDS Santa Ana</label>
					</div>
					<div class="form-group col-xs-12 col-sm-12 col-md-9 col-12">
						<select class="form-control" name="cursos" id="">
							<option>bla</option>
							<option>blu</option>
							<option>blo</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-12">
						<button name="responder" id="responder" class="btn btn-primary btn-block" type="button">Responder</button>
					</div>
					
				</div>
			</div>
			<!-- cortar luego -->
			<!-- Cortar tambien -->
			<div class="container ">
				<table class="table table-reponsive table-borderless border border-secondary">
					<thead class="bg-medio text-white">
						<tr>
							<th colspan="6" class="align-middle text-center">Preguntas</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="3" class="text-center align-middle border-bottom border-dark font-weight-bold">
								1
							</td>
							<td colspan="5" class="text-justify align-middle">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, eius distinctio labore nihil deleniti cupiditate. Sint, obcaecati? Dolorum nam magnam possimus harum. Dolor error iure nostrum nobis, voluptatem quod sint!
							</td>
						</tr>
						<tr class="bg-claro text-center">
							<td>Regular</td>
							<td>Aceptable</td>
							<td>Bueno</td>
							<td>Muy bueno</td>
							<td>Excelente</td>
						</tr>
						<tr class="text-center align-middle border-bottom border-dark" >
							<td>
								<input type="radio" class="radio-respuestas" name="radio-" id="radio-" value="1">
							</td>
							<td>
								<input type="radio" class="radio-respuestas" name="radio-" id="radio-" value="2">
							</td>
							<td>
								<input type="radio" class="radio-respuestas" name="radio-" id="radio-" value="3">
							</td>
							<td>
								<input type="radio" class="radio-respuestas" name="radio-" id="radio-" value="4">
							</td>
							<td>
								<input type="radio" class="radio-respuestas" name="radio-" id="radio-" value="5s">
							</td>
						</tr>
			
					</tbody>
				</table>
			</div>
			<!-- Cortar tambien -->
	</div>

	<div class="container-fluid postition fixed-bottom text-center bg-redu text-white font-weigth-bold">
		<p class="my-2">
		CDS Santa Ana <small>Copyright &copy; Sigfrid</small>
		</p>
	</div>
	
<script src="<?= base_url('assets/js/main.js')?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>