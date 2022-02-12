<?php 

	include "../paginas/conexion.php";

	$cedul_jef = $_POST['cedul_jef'];
	$nombr_jef = $_POST['nombr_jef'];
	$apeli_jef = $_POST['apeli_jef'];
	$fecna_jef = $_POST['fecna_jef'];
	$telem_jef = $_POST['telem_jef'];
	$telec_jef = $_POST['telec_jef'];
	$email_jef = $_POST['email_jef'];
	$calle_jef = $_POST['calle_jef'];
	$direc_jef = $_POST['direc_jef'];
	$seria_jef = $_POST['seria_jef'];
	$usuar_jef = $_POST['usuar_jef'];
	$contr_jef = md5($_POST['contr_jef']);
	$statu_jef = 1;
	$ident_tip = $_POST['ident_tip'];

	$query_insert = mysqli_query($conexion,"INSERT INTO tab_jef(cedul_jef,nombr_jef,apeli_jef,fecna_jef,telem_jef,telec_jef,email_jef,calle_jef,direc_jef,seria_jef,usuar_jef,contr_jef, statu_jef,ident_tip) VALUES('$cedul_jef','$nombr_jef','$apeli_jef','$fecna_jef','$telem_jef','$telec_jef','$email_jef','$calle_jef','$direc_jef','$seria_jef','$usuar_jef','$contr_jef','$statu_jef','$ident_tip')");

	header('location: ../paginas/jefe_registro_exito.php');
?>