<?php 

$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: admin_panel.php');
}else{

  if (!empty($_POST)) {
    if (empty($_POST['usuar_jef']) || empty($_POST['contr_jef'])) 
    {
      $alert = '(*) Ingrese su usuario y/o clave';
    }else{

      require_once 'conexion.php';
      $usuar_jef = mysqli_real_escape_string($conexion, $_POST['usuar_jef']);
      $contr_jef = md5(mysqli_real_escape_string($conexion, $_POST['contr_jef']));

      $query = mysqli_query($conexion,"SELECT u.ident_jef,u.cedul_jef,u.nombr_jef,u.apeli_jef,u.fecna_jef,u.telem_jef,u.telec_jef,u.email_jef,u.direc_jef,u.seria_jef,u.usuar_jef,u.contr_jef,u.statu_jef, r.ident_tip, r.nombr_tip FROM tab_jef u INNER JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE u.usuar_jef = '$usuar_jef' AND u.contr_jef = '$contr_jef'");
     
      $result = mysqli_num_rows($query);

      if ($result > 0)
      {

        $query_r =  mysqli_query($conexion,"SELECT * FROM tab_jef WHERE usuar_jef = '$usuar_jef' AND statu_jef = 0");
        
        $result_r  = mysqli_num_rows($query_r);

         if ($result_r > 0) {
            $alert = 'El Usuario no tiene acceso a esta sección.';
            session_destroy();
          }

          $query_s =  mysqli_query($conexion,"SELECT * FROM tab_jef WHERE usuar_jef = '$usuar_jef' AND ident_tip = 4");
          mysqli_close($conexion);
          $result_s  = mysqli_num_rows($query_s);
          if ($result_s > 0) {
              $alert = 'El Usuario no tiene acceso a esta sección.';
              session_destroy();
            }else{

              $data = mysqli_fetch_array($query);
              
              $_SESSION['active'] = true;
              $_SESSION['idUser'] = $data['ident_jef'];
              $_SESSION['nombr_jef'] = $data['nombr_jef'];
              $_SESSION['apeli_jef'] = $data['apeli_jef'];
              $_SESSION['fecna_jef'] = $data['fecna_jef'];
              $_SESSION['telem_jef'] = $data['telem_jef'];
              $_SESSION['telec_jef'] = $data['telec_jef'];
              $_SESSION['email_jef'] = $data['email_jef'];
              $_SESSION['direc_jef'] = $data['direc_jef'];
              $_SESSION['seria_jef'] = $data['seria_jef'];
              $_SESSION['usuar_jef'] = $data['usuar_jef'];
              $_SESSION['statu_jef'] = $data['statu_jef'];
              $_SESSION['ident_tip'] = $data['ident_tip'];
              $_SESSION['nombr_tip'] = $data['nombr_tip'];
              
              header('location: admin_panel.php');
            }
      }else{

        $alert = 'El Usuario y/o Contraseña son Incorrectos.';
        session_destroy();
      }
    }
  }
}

?>

<?php require_once('includes/logreg_header.php'); ?>

<head>
  <title>Iniciar Sesión | Consejo Comunal Comunidad 12 de Octubre</title>
</head>

<body>

<!-- Header --->

<header class="section-header mt-5">
  <section class="header-main">
    <div class="container" align="center">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="brand-wrap">
            <a href="../index.php" style="color: #000000; text-decoration: none;">
              <img class="logo" src="../imagen/logo-cc12o.png">
              <h2 class="logo-text"><b>Consejo Comunal Comunidad 12 de Octubre</b></h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<body>
  <div class="container">
    <div class="form-group text-center">
      <div class="formulario-registro-inicio">
        <form name="form" id="usuario_inicio" class="justify-content-center" align="center" action="" method="post">
          <h3>Iniciar Sesión</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_jef"><b>Usuario: </b></label>
              <input type="text" class="form-control" name="usuar_jef" autocomplete="off" id="usuar_jef" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_jef"><b>Contraseña: </b></label>
              <input type="password" class="form-control" name="contr_jef" autocomplete="off" id="contr_jef" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <div class="alert" style="color: #FC0107; font-style: italic;"><?php echo isset($alert)? $alert : ''; ?></div>
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Iniciar Sesión</button>
              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div>
        </form>
      </div> 
    </div>
  </div>
</body>

<?php require_once('includes/logreg_footer.php'); ?>

<script type="text/javascript">
 $( document ).ready( function () {
  $( "#usuario_inicio" ).validate( {
    rules: {
      usuar_jef: {
        required: true,
        minlength: 2
      },
      contr_jef: {
        required: true,
        minlength: 4
      }
    },

    messages: {
      usuar_jef: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
      },
      contr_jef: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      }
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  } );

} );

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

</script>
