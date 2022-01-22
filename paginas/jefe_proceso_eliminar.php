<?php 
	include ('conexion.php');
	$ident_jef = $_POST['id'];
			$delete_jefe = mysqli_query($conexion,"UPDATE tab_jef SET statu_jef = 0 WHERE ident_jef = '$ident_jef'");
			if ($delete_jefe) {
				
					$jefe = mysqli_query($conexion,"SELECT * FROM tab_jef WHERE ident_jef = '$ident_jef'");

				header('location: jefe_lista.php');
				exit;
			}else{
				echo 'error';
			}
		exit;

 ?>