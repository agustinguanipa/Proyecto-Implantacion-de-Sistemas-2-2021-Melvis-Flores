<?php 

include "../paginas/conexion.php";

// Actualizar Persona

	$id = $_POST['id'];
	$nombr_reg = $_POST['nombr_reg'];
	$fecre_reg = $_POST['fecre_reg'];
	$descr_reg = $_POST['descr_reg'];

	$query_reg = mysqli_query($conexion,"UPDATE tab_reg SET nombr_reg='".$nombr_reg."', fecre_reg='".$fecre_reg."',descr_reg='".$descr_reg."' WHERE ident_reg='".$id."'");

	header('location: ../paginas/registro_actualizar_exito.php');
?>