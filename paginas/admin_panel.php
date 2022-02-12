<?php
  session_start();

  if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php 
	require_once('includes/admin_header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron jumbotron-fluid jumbotron-admin-panel1">
				<div class="container mb-0">
					<h1 class="display-6">Noticias</h1>
					<p class="lead">Gestión de las Noticias en el Blog</p>
					<a href="noticia_lista.php" class="btn btn-primary">Ver Noticias</a>
					<a href="../index.php" class="btn btn-primary">Ir al Sitio Web Principal</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid jumbotron-admin-panel2">
				<div class="container mb-0">
					<h1 class="display-6">Comunidad</h1>
					<p class="lead">Listado de Personas que integran la Comunidad</p>
					<a href="jefe_lista.php" class="btn btn-light">Ver Personas</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid jumbotron-admin-panel3">
				<div class="container mb-0">
					<h1 class="display-6">COVID-19</h1>
					<p class="lead">Gestión de Casos</p>
					<a href="registro_lista.php" class="btn btn-warning">Ver Casos</a>
					<a href="registro_nuevo.php" class="btn btn-warning">Registrar</a>
				</div>
			</div>
		</div>
	</div>		
	
</div>
</br>

<?php require_once('includes/admin_footer.php');  ?>