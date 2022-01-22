<?php 
session_start();
 include "../paginas/conexion.php";

 $actual = md5($_POST['txtPassUser']);
 $nueva = md5($_POST['txtNewPassUser']);
 $confirmacion = $_POST['txtPassConfirm'];
 $ident_jef = $_SESSION['idUser'];

	$query_user = mysqli_query($conexion,"SELECT * FROM tab_jef WHERE contr_jef = '$actual' AND ident_jef = '$ident_jef'");
	$result_user = mysqli_num_rows($query_user);

	if ($result_user > 0)
	{
		if ($_POST["textNewpassUser"] == $result_user["contr_jef"]) {
        $query_update = mysqli_query($conexion,"UPDATE tab_jef SET contr_jef = '$nueva' WHERE ident_jef = '$ident_jef'");
        header('location: ../paginas/configuracion_actualizar_exito.php');
    } else
        header('location: ../paginas/configuracion_actualizar_error.php');
	}else
		header('location: ../paginas/configuracion_actualizar_error.php');
 ?>

