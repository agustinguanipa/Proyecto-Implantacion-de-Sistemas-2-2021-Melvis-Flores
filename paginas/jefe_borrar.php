<?php 
	require_once('includes/admin_header.php');

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  include 'conexion.php' ;

$id = $_GET['id'];

	$query_user = mysqli_query($conexion,"SELECT u.ident_jef, u.cedul_jef, u.nombr_jef, u.apeli_jef, r.ident_tip, r.nombr_tip FROM tab_jef u INNER JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE ident_jef = '$id' AND statu_jef = 1");
	
$result_user = mysqli_num_rows($query_user);

$data = mysqli_fetch_array($query_user);

	$cedul_jef = $data['cedul_jef'];
	$nombr_jef = $data['nombr_jef'];
	$apeli_jef = $data['apeli_jef'];

?>

<div class="container col-lg-8">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Eliminar Persona</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="jefe_borrar" class="justify-content-center mx-3 my-1" align="center" enctype="" action="jefe_proceso_eliminar.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
						<h2><b>¿Esta seguro que desea eliminar el siguiente registro?</b></h2>
					  <div class="form-row">
					  	<div class="col form-group">
					      <label class="form-label" for="cedul_jef"><b>Cédula de Identidad: </b></label>
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
					  </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" id="" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Eliminar Persona</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="jefe_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>