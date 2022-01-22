<?php 
	session_start();

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');


  include 'conexion.php' ;

$id = $_GET['id'];

$query_user = mysqli_query($conexion,"SELECT * FROM tab_reg WHERE ident_reg = '$id' AND statu_reg = 1");
	
$result_user = mysqli_num_rows($query_user);

$data = mysqli_fetch_array($query_user);

	$nombr_reg = $data['nombr_reg'];
	$descr_reg = $data['descr_reg'];
	$fecre_reg = $data['fecre_reg'];
?>

<div class="container col-lg-8">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Eliminar Evento</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="" class="justify-content-center mx-3 my-1" align="center" enctype="" action="registro_proceso_eliminar.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
						<h2><b>¿Esta seguro que desea eliminar el siguiente registro?</b></h2>
					  <div class="form-row">
					  	<div class="col form-group">
					      <label class="form-label" for="nombr_reg"><b>Nombre: </b></label>
					      <label><?php echo $nombr_reg; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="descr_reg"><b>Descripción: </b></label>
					      <label><?php echo $descr_reg; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="fecre_reg"><b>Fecha: </b></label>
					      <label><?php echo $fecre_reg; ?></label>
					    </div>
					  </div>
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" id="" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Eliminar Evento</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="registro_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>