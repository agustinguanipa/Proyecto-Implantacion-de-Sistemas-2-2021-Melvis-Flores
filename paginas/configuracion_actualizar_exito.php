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
			    <b>Cambiar Contraseña</b>
			  </div>
		   	<div class="card-body">
  				<h2><b>¡La Contraseña ha sido Cambiada Exitosamente!</b></h2>
				</div>
				<div class="card-footer">
           <a href="admin_configuracion.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver a Configuración</a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

