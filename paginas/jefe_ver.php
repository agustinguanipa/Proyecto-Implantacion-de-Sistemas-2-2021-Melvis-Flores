<?php 
	session_start();

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');
?>

<?php 

include 'conexion.php';

if (empty($_GET['id'])) {
	header('location: jefe_lista.php');
}

$id = $_GET['id'];

	$query_jef = mysqli_query($conexion,"SELECT u.ident_jef,u.cedul_jef,u.nombr_jef, u.apeli_jef, u.fecna_jef, u.telem_jef, u.telec_jef, u.email_jef, u.calle_jef, u.direc_jef, u.usuar_jef, u.seria_jef, u.ident_tip, r.ident_tip, r.nombr_tip FROM tab_jef u INNER JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE ident_jef = '$id' AND statu_jef = 1");
	
$result_jef = mysqli_num_rows($query_jef);

if ($result_jef == 0) 
{
	header('location: jefe_lista.php');
}else{
	$data_jef = mysqli_fetch_array($query_jef);
	
	$cedul_jef = $data_jef['cedul_jef'];
	$nombr_jef = $data_jef['nombr_jef'];
	$apeli_jef = $data_jef['apeli_jef'];
	$fecna_jef = $data_jef['fecna_jef'];
	$telem_jef = $data_jef['telem_jef'];
	$telec_jef = $data_jef['telec_jef'];
	$email_jef = $data_jef['email_jef'];
	$calle_jef = $data_jef['calle_jef'];
	$direc_jef = $data_jef['direc_jef'];
	$seria_jef = $data_jef['seria_jef'];
	$usuar_jef = $data_jef['usuar_jef'];
	$ident_tip = $data_jef['ident_tip'];
	$nombr_tip = $data_jef['nombr_tip'];
}
mysqli_close($conexion);
?>

<div class="container col-lg-10">
	<div class="card text-center">
	  <div class="card-header">
	    <b>Ver Jefe de Familia</b>
	  </div>
		<div class="card-body" class="justify-content-center mx-3 my-1">
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="cedul_jef"><b>Cédula: </b></label>
		      <label><?php echo $cedul_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="nombr_jef"><b>Nombre: </b></label>
		      <label><?php echo $nombr_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="apeli_jef"><b>Apellido: </b></label>
		      <label><?php echo $apeli_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="fecna_jef"><b>Fecha de Nac.: </b></label>
		      <label><?php echo $fecna_jef; ?></label>
		    </div>
		  </div>
		  <hr>
		  <div class="form-row">
		    <div class="col form-group">
		      <label class="form-label" for="telem_jef"><b>Teléfono Celular: </b></label>
		      <label><?php echo $telem_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="telec_jef"><b>Teléfono de Casa: </b></label>
		      <label><?php echo $telec_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="email_jef"><b>E-Mail: </b></label>
		      <label><?php echo $email_jef; ?></label>
		    </div>
		  </div>
		  <hr>
		  <div class="form-row">
		  	<div class="col form-group">
		      <label class="form-label" for="calle_jef"><b>Calle o Carrera: </b></label>
		      <label><?php echo $calle_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="direc_jef"><b>Dirección: </b></label>
		      <label><?php echo $direc_jef; ?></label>
		    </div>
		  </div>
		  <hr>
		  <div class="form-row">
		  	<div class="col form-group">
		      <label class="form-label" for="usuar_jef"><b>Usuario: </b></label>
		      <label><?php echo $usuar_jef; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="seria_jef"><b>Serial del Carnet de la Patria: </b></label>
		      <label><?php echo $seria_jef; ?></label>
		    </div>
		  </div>
		  <hr>
		</div>
		<div class="card-footer">
	     <a href="jefe_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
		</div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>