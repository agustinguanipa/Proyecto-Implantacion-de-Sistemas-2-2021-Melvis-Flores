<?php 
	include ('conexion.php');
	$ident_reg = $_POST['id'];
			$delete_registro = mysqli_query($conexion,"UPDATE tab_reg SET statu_reg = 0 WHERE ident_reg = '$ident_reg'");
			if ($delete_registro) {
				
					$registro = mysqli_query($conexion,"SELECT * FROM tab_reg WHERE ident_reg = '$ident_reg'");

				header('location: registro_lista.php');
				exit;
			}else{
				echo 'error';
			}
		exit;

 ?>