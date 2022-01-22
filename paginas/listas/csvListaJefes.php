<?php

require("../conexion.php");

$query = "SELECT u.ident_jef, u.cedul_jef, u.nombr_jef, u.apeli_jef, u.fecna_jef, u.telem_jef, u.telec_jef, u.email_jef, u.calle_jef, u.direc_jef, u.tibom_jef, u.seria_jef, r.nombr_tip FROM tab_jef u LEFT JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE statu_jef = 1 AND ident_jef != 1 ORDER BY u.ident_tip ASC, ident_jef ASC";
if (!$result = mysqli_query($conexion, $query)) {
    exit(mysqli_error($conexion));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Jefes de Familia - Consejo Comunal Comunidad 12 de Octubre.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('#', 'Cedula', 'Nombre', 'Apellido', 'Fecha de Nacimiento', 'Telefono Celular', 'Telefono de Casa', 'E-Mail', 'Calle', 'Direccion', 'Tipo de Bombona', 'Serial del Carnet de la Patria', 'Tipo'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>