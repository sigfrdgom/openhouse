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
			<div class="container align-middle">
				<h4 class="text-center mb-2">Retroalimentacion Open House CDS Santa Ana</h4><br>
				<p class="text-justify mx-5" style="font-size: 1.1em">
				A continuación se presenta un breve instrumento de recolección de datos para poder obtener una retroalimentación de su parte como asistente al Open House de CDS Santa Ana.
				</p>
				<p class="text-justify mx-5"  style="font-size: 1.1em">
				La información que se proporcione será anónima y será de ayuda para mejorar la calidad de los sistemas presentados, ayudando así a mejorar la calidad de estos si lo requieren, y motivar a los participantes del programa CDS a seguir adelante y mejorar cada dia mas tanto como personas y en los productos de software que estos puedan desarrollar.
				</p>

				<div class="mx-5 my-3 mt-5 text-center">
					<button type="button" class="mr-5 btn btn-primary btn-lg px-5 py-3 font-weight-bolder btn-block" onclick="mostrarSelectCurso()">INICIAR</button>
				</div>
			</div>
			
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