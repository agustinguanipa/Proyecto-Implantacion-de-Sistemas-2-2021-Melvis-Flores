<?php 
	include ('conexion.php');
	$ident_reg = $_POST['id'];
			$restaurar_registro = mysqli_query($conexion,"UPDATE tab_reg SET statu_reg = 1 WHERE ident_reg = '$ident_reg'");
			if ($restaurar_registro) {
				
					$registro = mysqli_query($conexion,"SELECT * FROM tab_reg WHERE ident_reg = '$ident_reg'");

				header('location: registro_lista_inactivo.php');
				exit;
			}else{
				echo 'error';
			}
		exit;

 ?>