<?php
  include_once("conexion.php");

  $cedul_jef = urldecode($_POST['cedul_jef']);
  $result = mysqli_query($conexion, "SELECT * FROM tab_jef WHERE cedul_jef = '$cedul_jef' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($conexion);
?>