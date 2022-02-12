<?php
  session_start();

  require_once('includes/admin_header.php');

  if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php 

include 'conexion.php';

if (empty($_GET['id'])) {
  header('location: jefe_lista.php');
}

$id = $_GET['id'];

  $query_jef = mysqli_query($conexion,"SELECT u.ident_jef,u.cedul_jef,u.nombr_jef, u.apeli_jef, u.fecna_jef, u.telem_jef, u.telec_jef, u.email_jef, u.calle_jef, u.direc_jef, u.usuar_jef, u.seria_jef, u.ident_tip, r.ident_tip, r.nombr_tip FROM tab_jef u INNER JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE ident_jef = '$id' AND statu_jef = 1");
  
$result_jef = mysqli_num_rows($query_jef);

if ($result_jef == 0) 
{
  header('location: jefe_lista.php');
}else{
  $data_jef = mysqli_fetch_array($query_jef);
  
  $cedul_jef = $data_jef['cedul_jef'];
  $nombr_jef = $data_jef['nombr_jef'];
  $apeli_jef = $data_jef['apeli_jef'];
  $fecna_jef = $data_jef['fecna_jef'];
  $telem_jef = $data_jef['telem_jef'];
  $telec_jef = $data_jef['telec_jef'];
  $email_jef = $data_jef['email_jef'];
  $calle_jef = $data_jef['calle_jef'];
  $direc_jef = $data_jef['direc_jef'];
  $seria_jef = $data_jef['seria_jef'];
  $usuar_jef = $data_jef['usuar_jef'];
  $ident_tip = $data_jef['ident_tip'];
  $nombr_tip = $data_jef['nombr_tip'];
}
mysqli_close($conexion);
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
			    <b>Editar Persona</b>
			  </div>
		   	<div class="card-body">
  				<form role="form" id="jefe_editar" class="justify-content-center mx-3 my-1" align="center" enctype="multipart/form-data" action="../ajax/editar_jefe.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		        <div class="form-row">
		          <div class="col form-group">
		            <label class="form-label" for="nombr_jef"><b>Nombre: </b></label>
		            <input type="text" class="form-control" name="nombr_jef" autocomplete="off" id="nombr_jef" value="<?php echo $nombr_jef; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
		          <div class="col form-group">
		            <label class="form-label" for="apeli_jef"><b>Apellido: </b></label>
		            <input type="text" class="form-control" name="apeli_jef" autocomplete="off" id="apeli_jef" value="<?php echo $apeli_jef; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
		        </div>
		        <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="fecna_jef"><b>Fecha de Nacimiento: </b></label>
                <input type="date" class="form-control" name="fecna_jef" autocomplete="off" value="<?php echo $fecna_jef; ?>" id="fecna_jef">
              </div>
              <div class="col form-group">
                <label class="form-label" for="telem_jef"><b>Teléfono Celular: </b></label>
                <input type="text" class="form-control telem-mask" name="telem_jef" autocomplete="off" id="telem_jef" value="<?php echo $telem_jef; ?>" maxlength="15">
              </div>
              <div class="col form-group">
                <label class="form-label" for="telec_jef"><b>Teléfono de Casa: </b></label>
                <input type="text" class="form-control telec-mask" name="telec_jef" autocomplete="off" id="telec_jef" value="<?php echo $telec_jef; ?>" maxlength="15">
              </div>
		          <div class="col form-group">
		            <label class="form-label" for="email_jef"><b>E-Mail: </b></label>
		            <input type="email" class="form-control" name="email_jef" autocomplete="off" value="<?php echo $email_jef; ?>" id="email_jef" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
		        </div>
		        <div class="form-row">
              <div class="col form-group col-lg-4">
                <label class="form-label" for="calle_jef"><b>Calle o Carrera: </b></label>
                <select class="form-control notItemOne" id="calle_jef" name="calle_jef">
                  <option value="<?php echo $calle_jef;?>"><?php echo $calle_jef;?></option>
                  <option value="AVENIDA ESPANA">AVENIDA ESPANA</option>
                  <option value="AVENIDA UNIVERSIDAD">AVENIDA UNIVERSIDAD</option>
                  <option value="CALLE 2">CALLE 2</option>
                  <option value="CARRERA 6">CARRERA 6</option>
                  <option value="CARRERA 7">CARRERA 7</option>
                  <option value="CARRERA 8">CARRERA 8</option>
                </select>
              </div>
              <div class="col form-group col-lg-8">
                <label class="form-label" for="direc_jef"><b>Dirección: </b></label>
                <input type="text" class="form-control" name="direc_jef" autocomplete="off" id="direc_jef" value="<?php echo $direc_jef; ?>" onkeyup="this.value = this.value.toUpperCase();">
              </div>
		        </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="seria_jef"><b>Serial del Carnet de la Patria: </b></label>
                <input type="text" class="form-control" name="seria_jef" autocomplete="off" id="seria_jef" value="<?php echo $seria_jef; ?>" maxlength="20">
              </div>
              <div class="col form-group">
                <label class="form-label" for="ident_tip"><b>Tipo de Usuario: </b></label>
                <?php
                  include "conexion.php";
                  $query_tip = mysqli_query($conexion,"SELECT * FROM tab_tip WHERE ident_tip != 1"); 
                  $result_tip = mysqli_num_rows($query_tip);
                ?>
                <select class="form-control notItemOne" name="ident_tip" id="ident_tip" required>
                  <option value="<?php echo $ident_tip;?>"><?php echo $nombr_tip;?></option>
                  <?php 
                    if ($result_tip > 0) {
                    while ($tip = mysqli_fetch_array($query_tip)) {?>
                    <option value="<?php echo $tip['ident_tip'];?>"><?php echo $tip['nombr_tip'];?></option>
                  <?php
                  }
                  }
                  ?>
                </select>
              </div>
		        </div>
            <div id="hidden_div" style="display: none;">
              <div class="form-row">
                <div class="col form-group">
                  <label class="form-label" for="usuar_jef"><b>Usuario: </b></label>
                  <input type="text" class="form-control tipo" name="usuar_jef" autocomplete="off" id="usuar_jef" value="<?php echo $usuar_jef; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                </div>
                <div class="col form-group">
                  <label class="form-label" for="contr_jef"><b>Contraseña: </b></label>
                  <input type="password" class="form-control tipo" name="contr_jef" autocomplete="off" id="contr_jef" placeholder="********" maxlength="20">
                </div>
                <div class="col form-group">
                  <label class="form-label" for="confirm_password"><b>Confirmar Contraseña: </b></label>
                  <input type="password" class="form-control tipo" name="confirm_password" autocomplete="off" id="confirm_password" placeholder="********" maxlength="20">
                </div>
              </div>
            </div> 
		        <div class="form-row">
		          <div class="col form-group">
		            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Actualizar Persona</button>
		            <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
		          </div>
		        </div>
		      </form>
				</div>
				<div class="card-footer">
           <a href="jefe_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#jefe_editar" ).validate( {
    rules: {
      nombr_jef: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apeli_jef: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      fecna_jef: {
        required: true
      },
      telem_jef: {
        number: false,
        minlength: 15
      },
      telec_jef: {
        number: false,
        minlength: 15
      },
      email_jef: {
        email: true
      },
      direc_jef: {
        required: true
      },
      seria_jef: {
        number: true
      },
      usuar_jef: {
        required: true,
        minlength: 2,
        remote: {
          url: "jefe_usuario_availability.php",
          type: "post",
          data:
            {
              usuar_jef: function()
              {
                return $('#jefe_editar :input[name="usuar_jef"]').val();
              }
            }
        }     
      },
      contr_jef: {
        required: true,
        minlength: 4
      },
      confirm_password: {
        required: true,
        minlength: 4,
        equalTo: "#contr_jef"
      },
      ident_tip: {
        required: true
      },
    },

    messages: {
      nombr_jef: {
        required: "Ingrese un Nombre",
        lettersonly: "El Nombre solo debe contener letras sin espacios",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      apeli_jef: {
        required: "Ingrese un Apellido",
        lettersonly: "El Apellido solo debe contener letras sin espacios",
        minlength: "El Apellido debe contener al menos 2 caracteres"
      },
      fecna_jef: {
        required: "Ingrese una Fecha de Nacimiento"
      },
      telem_jef: {
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      telec_jef: {
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_jef: {
        email: "Ingrese una Dirección de Correo Electrónico Válida"
      },
      direc_jef: {
        required: "Ingrese una Dirección"
      },
      seria_jef: {
        number: "Ingrese solo números"
      },
      usuar_jef: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "El Nombre de Usuario debe contener al menos 2 caracteres",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
      contr_jef: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      },
      confirm_password: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres",
        equalTo: "Ingrese la Misma Contraseña"
      },
      ident_tip: {
        required: "Seleccione una Opcion"
      },
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

// Masks

$('.telem-mask').mask('(0000) 000 0000');
$('.telec-mask').mask('(0000) 000 0000');

</script>

<script type="text/javascript">
  
  document.getElementById('ident_tip').addEventListener('change', function () {
    var style = this.value != 4  ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = style;
});

</script>