<?php
  include_once("conexion.php");

  $contr_jef = urldecode($_POST['txtPassUser']);
  $result = mysqli_query($conexion, "SELECT * FROM tab_jef WHERE contr_jef = '$contr_jef' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($conexion);
?>