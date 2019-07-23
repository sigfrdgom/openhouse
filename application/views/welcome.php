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
				<li class="nav-item active">
					<a class="nav-link text-white" onClick="">Responder</a>
				</li>
				<!-- <li class="nav-item active">
					<a class="nav-link text-white" onClick="">Respuestas</a>
				</li> -->
				<li class="nav-item dropdown bg-blueu">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mas</a>
					<div class="dropdown-menu bg-blueu" aria-labelledby="dropdownId">
						<a class="dropdown-item text-white" onClick="">Proyectos</a>
						<a class="dropdown-item text-white" onClick="">Preguntas</a>
						<a class="dropdown-item text-white" onClick="">Respuestas</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid mt-5 mb-5" id="main-content">

	<div class="container-fluid text-right mt-3">
		<button class="btn btn-success btn-greenu mx-2" data-toggle="modal" data-target="#modelId"> Agregar nuevo proyecto </button>
	</div>

		<div class=" mx-2 mt-3">
			<table class="table table-borderless table-responsive-xl table-sm align-middle">
				<thead class="bg-dark text-white text-center align-middle">
					<tr>
						<!-- <th>ID</th> -->
						<th>PROYECTO</th>
						<th>NIVEL</th>
						<th>COHORTE</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-bottom border-dark">
						<!-- <td>1</td> -->
						<td>algo del proyecto</td>
						<td>1</td>
						<td>2</td>
						<td rowspan="2" class="align-middle"><button class="btn btn-block btn-warning bg-orangeu">Editar</button></td>
						<td rowspan="2" class="align-middle"><button class="btn btn-block btn-danger bg-redu">Eliminar</button></td>
					</tr>
					<tr class="border-bottom border-dark">
						<td colspan="3">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, fugit! Cumque aliquam dolores consectetur eveniet unde, doloremque sapiente dolorum laborum magni optio ipsam asperiores rerum vitae provident totam libero consequatur!
						</td>
					</tr>
				</tbody>
			</table>
		</div>
			
	</div>
	<div class="container-fluid postition fixed-bottom text-center bg-redu text-white font-weigth-bold">
		<p class="my-2">
		CDS Santa Ana <small>Copyright &copy; Sigfrid</small>
		</p>
	</div>
	
	
	<!-- Modal -->
	<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">sm</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body">
					Body
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger bg-redu" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success bg-greenu">Save</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>