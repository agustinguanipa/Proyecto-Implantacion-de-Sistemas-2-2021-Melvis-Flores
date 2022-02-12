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

	$query = mysqli_query($conexion,"SELECT * FROM tab_reg WHERE ident_reg = '$id' AND statu_reg = 1");
	
$result = mysqli_num_rows($query);

if ($result == 0) 
{
	header('location: registro_lista.php');
}else{
	$data = mysqli_fetch_array($query);

	$nombr_reg = $data['nombr_reg'];
	$descr_reg = $data['descr_reg'];
	$fecre_reg = $data['fecre_reg'];
	$ident_reg = $data['ident_reg'];
	$cedul_jef = $data['cedul_jef'];
	$nombr_jef = $data['nombr_jef'];
	$apeli_jef = $data['apeli_jef'];
	$fecna_jef = $data['fecna_jef'];
	$telem_jef = $data['telem_jef'];
	$telec_jef = $data['telec_jef'];
	$email_jef = $data['email_jef'];
	$calle_jef = $data['calle_jef'];
	$direc_jef = $data['direc_jef'];
	$tibom_jef = $data['tibom_jef'];
	$seria_jef = $data['seria_jef'];
	$usuar_jef = $data['usuar_jef'];
	$ident_tip = $data['ident_tip'];
	$nombr_tip = $data['nombr_tip'];
}
mysqli_close($conexion);
?>

<div class="container col-lg-10">
	<div class="card text-center">
	  <div class="card-header">
	    <b>Ver Caso</b>
	  </div>
		<div class="card-body" class="justify-content-center mx-3 my-1">
		  <div class="form-row">
		  	 <div class="col form-group">
		      <label class="form-label" for="nombr_reg"><b>Nombre: </b></label>
		      <label><?php echo $nombr_reg; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="descr_reg"><b>Descripcion: </b></label>
		      <label><?php echo $descr_reg; ?></label>
		    </div>
		    <div class="col form-group">
		      <label class="form-label" for="fecre_reg"><b>Fecha de la Aparición de Síntomas: </b></label>
		      <label><?php echo $fecre_reg; ?></label>
		    </div>
		  </div>
		  <hr>
		  <div class="form-row">
		  	<div class="col form-group">
		      <label class="form-label" for="ident_jef"><b>Síntomas: </b></label><br>
		      <?php
		      	include "conexion.php";
						$query_rol = mysqli_query($conexion,"SELECT * FROM tab_sim INNER JOIN det_reg USING (ident_sin) WHERE det_reg.ident_reg = '$id'");
						$result_rol = mysqli_num_rows($query_rol);
					?>
					<?php 
						if ($result_rol > 0) {
						while ($rol = mysqli_fetch_array($query_rol)) {?>
		      	<label> - <?php echo $rol['sin1_sin'];?></label><br>
		      	<?php
						}
						}
						?>
		    </div>
		  </div>
		</div>
		<div class="card-footer">
			<!-- <a href="listas/generaListaEvento.php?id=<?php echo $data['ident_reg']; ?>" class="btn btn-info float-right mx-2" target="_blank"><i class="fa fa-print" u="<?php echo $data['ident_reg']; ?>"></i> Generar PDF</a> -->
	    <a href="registro_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
		</div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>