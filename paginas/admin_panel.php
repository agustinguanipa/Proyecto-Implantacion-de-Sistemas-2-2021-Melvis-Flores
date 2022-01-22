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
	<div class="card-deck">
		<div class="card" align="center">
    <div class="card-body index-background">
      <h2 class="card-title text-white"><b>Consejo Comunal Comunidad 12 de Octubre</b></h2>
      <p class="card-text text-white"><b>Comunidad de Comunidad 12 de Octubre Naranjales, Municipio Fernández Feo, Estado Táchira</b></p>
      <a href="../index.php" class="btn btn-light btn-lg"> <b>Ir a la Web</b><i class="fa fa-home ml-2"></i></a>
    </div>
  </div>
	</div>
</div>
</br>
<div class="container-fluid" align="center">
	<div class="card-deck">
		<div class="card mb-3">
		  <img src="../imagen/panel-1.jpg" class="card-img-top" alt="Panel Noticias">
		  <div class="card-body">
		    <h5 class="card-title"><b>Noticias</b></h5>
		    <p class="card-text">Agrega y Visualiza todas las Noticias Publicadas</p>
		  </div>
		  <div class="card-footer">
		  	<a href="noticia_lista.php" class="btn btn-primary">Ver Noticias</a>
		  </div>
		</div>
	  <div class="card mb-3">
		  <img src="../imagen/panel-3.jpg" class="card-img-top" alt="Panel Comunidad">
		  <div class="card-body">
		    <h5 class="card-title"><b>Comunidad</b></h5>
		    <p class="card-text">Listado de Personas que integran la Comunidad</p>
		  </div>
		  <div class="card-footer">
		  	<a href="jefe_lista.php" class="btn btn-primary">Ver Jefes de Familia</a>
		  	<a href="persona_lista.php" class="btn btn-primary">Ver Personas</a>
		  </div>
		</div>
		<div class="card mb-3">
		  <img src="../imagen/panel-2.jpg" class="card-img-top" alt="Panel Eventos">
		  <div class="card-body">
		    <h5 class="card-title"><b>Eventos</b></h5>
		    <p class="card-text">Registros de Jornadas, CLAP, Gas y demás</p>
		  </div>
		  <div class="card-footer">
		  	<a href="registro_lista.php" class="btn btn-primary">Ver Eventos</a>
		  </div>
		</div>
	  
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>
