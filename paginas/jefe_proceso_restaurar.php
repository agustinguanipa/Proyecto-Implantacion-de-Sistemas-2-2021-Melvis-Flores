<?php 
	include ('conexion.php');
	$ident_jef = $_POST['id'];
			$restaurar_jefe = mysqli_query($conexion,"UPDATE tab_jef SET statu_jef = 1 WHERE ident_jef = '$ident_jef'");
			if ($restaurar_jefe) {
				
					$jefe = mysqli_query($conexion,"SELECT * FROM tab_jef WHERE ident_jef = '$ident_jef'");

				header('location: jefe_lista_inactivo.php');
				exit;
			}else{
				echo 'error';
			}
		exit;

 ?>