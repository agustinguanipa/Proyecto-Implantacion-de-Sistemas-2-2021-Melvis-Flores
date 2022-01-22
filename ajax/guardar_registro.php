<?php

include "../paginas/conexion.php";

$nombr_reg = $_POST['nombr_reg'];
$descr_reg = $_POST['descr_reg'];
$fecre_reg = $_POST['fecre_reg'];
$statu_reg = 1;
$ident_ref = 1;

$sqlInsert = "
        INSERT INTO tab_reg(nombr_reg,descr_reg,fecre_reg,statu_reg) 
        VALUES ('$nombr_reg', '$descr_reg', '$fecre_reg', '$statu_reg')";       

    mysqli_query($conexion, $sqlInsert);

    $lastInsertId = mysqli_insert_id($conexion);
    $jefes = $_POST['ident_jef'];
    for ($i = 0; $i <= count($_POST['ident_jef']); $i++) {
        
        $sqlInsertItem = "
        INSERT INTO det_reg(ident_reg, ident_jef) 
        VALUES ('$lastInsertId', '$jefes[$i]')";            
        mysqli_query($conexion, $sqlInsertItem);
    }      

  header('location: ../paginas/registro_registro_exito.php');

  ?>