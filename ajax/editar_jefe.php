<?php 

include "../paginas/conexion.php";

// Actualizar Jefe de Familia

	$id = $_POST['id'];
	$nombr_jef = $_POST['nombr_jef'];
	$apeli_jef = $_POST['apeli_jef'];
	$fecna_jef = $_POST['fecna_jef'];
	$telem_jef = $_POST['telem_jef'];
	$telec_jef = $_POST['telec_jef'];
	$email_jef = $_POST['email_jef'];
	$calle_jef = $_POST['calle_jef'];
	$direc_jef = $_POST['direc_jef'];
	$tibom_jef = $_POST['tibom_jef'];
	$seria_jef = $_POST['seria_jef'];
	$usuar_jef = $_POST['usuar_jef'];
	$contr_jef = md5($_POST['contr_jef']);
	$ident_tip = $_POST['ident_tip'];

	$query_user = mysqli_query($conexion,"UPDATE tab_jef SET nombr_jef='".$nombr_jef."', apeli_jef='".$apeli_jef."',fecna_jef='".$fecna_jef."', telem_jef='".$telem_jef."', telec_jef='".$telec_jef."', email_jef='".$email_jef."', calle_jef='".$calle_jef."', direc_jef='".$direc_jef."', tibom_jef='".$tibom_jef."', seria_jef='".$seria_jef."', usuar_jef='".$usuar_jef."', contr_jef='".$contr_jef."', ident_tip='".$ident_tip."' WHERE ident_jef='".$id."'");

	header('location: ../paginas/jefe_actualizar_exito.php');
?>