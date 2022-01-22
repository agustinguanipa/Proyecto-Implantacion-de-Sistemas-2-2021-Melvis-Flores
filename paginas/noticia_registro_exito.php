<?php 
  session_start();

  if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');
?>

<div class="container col-lg-6">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Publicar Noticia</b>
			  </div>
		   	<div class="card-body">
  				<h2><b>¡La Noticia ha sido Publicada Exitosamente!</b></h2>
				</div>
				<div class="card-footer">
           <a href="noticia_registro.php" class="btn btn-info float-left"><i class="fa fa-plus"></i> Publicar otra Noticia</a> 
           <a href="noticia_lista.php" class="btn btn-primary float-right">Ir al Listado <i class="fa fa-arrow-right"></i></a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

