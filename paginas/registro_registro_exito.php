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
			    <b>Registrar Evento</b>
			  </div>
		   	<div class="card-body">
  				<h2><b>¡El Caso ha sido Registrado Exitosamente!</b></h2>
				</div>
				<div class="card-footer">
           <a href="registro_nuevo.php" class="btn btn-info float-left"><i class="fa fa-plus"></i> Registrar otro Caso</a> 
           <a href="registro_lista.php" class="btn btn-primary float-right">Ir al Listado <i class="fa fa-arrow-right"></i></a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

