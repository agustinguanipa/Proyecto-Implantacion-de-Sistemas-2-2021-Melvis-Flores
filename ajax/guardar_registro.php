<?php

include "../paginas/conexion.php";

$obser_reg = $_POST['obser_reg'];
$fecre_reg = $_POST['fecre_reg'];
$statu_reg = 1;
$ident_jef = $_POST['ident_jef'];

$sqlInsert = "
        INSERT INTO tab_reg(obser_reg,fecre_reg,statu_reg,ident_jef) 
        VALUES ('$obser_reg', '$fecre_reg', '$statu_reg','$ident_jef')";       

    mysqli_query($conexion, $sqlInsert);

    echo $sqlInsert;

    $lastInsertId = mysqli_insert_id($conexion);
    $sintomas = $_POST['ident_sin'];
    for ($i = 0; $i <= count($_POST['ident_sin']); $i++) {
        
        $sqlInsertItem = "
        INSERT INTO det_reg(ident_reg, ident_sin) 
        VALUES ('$lastInsertId', '$sintomas[$i]')";            
        mysqli_query($conexion, $sqlInsertItem);
    }      

  header('location: ../paginas/registro_registro_exito.php');

  ?>