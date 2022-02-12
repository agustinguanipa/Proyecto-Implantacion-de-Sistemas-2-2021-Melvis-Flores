<?php 
  session_start();

  if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');
?>

<div class="container col-lg-10">
  <div class="form-group text-center">
    <div class="card">
    	<div class="card-header">
		    <b>Registrar Persona</b>
		  </div>
	   	<div class="card-body">
        <form role="form" id="jefe_registro" class="justify-content-center mx- my-1" align="center" enctype="multipart/form-data" action="../ajax/guardar_jefe.php" method="post">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="cedul_jef"><b>Cédula de Identidad: </b></label>
              <input type="text" class="form-control" name="cedul_jef" autocomplete="off" id="cedul_jef" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="nombr_jef"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_jef" autocomplete="off" id="nombr_jef" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="apeli_jef"><b>Apellido: </b></label>
              <input type="text" class="form-control" name="apeli_jef" autocomplete="off" id="apeli_jef" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="fecna_jef"><b>Fecha de Nacimiento: </b></label>
              <input type="date" class="form-control" name="fecna_jef" autocomplete="off" id="fecna_jef" placeholder="">
            </div>
            <div class="col form-group">
              <label class="form-label" for="telem_jef"><b>Teléfono Celular: </b></label>
              <input type="text" class="form-control telem-mask" name="telem_jef" autocomplete="off" id="telem_jef" placeholder="(0000) 000 0000" maxlength="15">
            </div>
            <div class="col form-group">
              <label class="form-label" for="telec_jef"><b>Teléfono de Casa: </b></label>
              <input type="text" class="form-control telec-mask" name="telec_jef" autocomplete="off" id="telec_jef" placeholder="(0000) 000 0000" maxlength="15">
            </div>
            <div class="col form-group">
              <label class="form-label" for="email_jef"><b>E-Mail: </b></label>
              <input type="email" class="form-control" name="email_jef" autocomplete="off" id="email_jef" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group col-lg-4">
              <label class="form-label" for="calle_jef"><b>Calle o Carrera: </b></label>
              <select class="form-control" id="calle_jef" name="calle_jef">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="CARRETERA PRINCIPAL">CARRETERA PRINCIPAL</option>
                <option value="CALLE 1">CALLE 1</option>
                <option value="CALLE 2">CALLE 2</option>
                <option value="CALLE 3">CALLE 3</option>
                <option value="CALLE 4">CALLE 4</option>
                <option value="CALLE 5">CALLE 5</option>
                <option value="CALLE 6">CALLE 6</option>
                <option value="CARRERA 1">CARRERA 1</option>
                <option value="CARRERA 2">CARRERA 2</option>
                <option value="CARRERA 3">CARRERA 3</option>
              </select>
            </div>
            <div class="col form-group col-lg-8">
              <label class="form-label" for="direc_jef"><b>Dirección: </b></label>
              <input type="text" class="form-control" name="direc_jef" autocomplete="off" id="direc_jef" placeholder="Residencia / Urbanizacion" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="seria_jef"><b>Serial del Carnet de la Patria: </b></label>
              <input type="text" class="form-control" name="seria_jef" autocomplete="off" id="seria_jef" maxlength="20">
            </div>
            <!--- Administrador -->
            <?php  
              if ($data['nombr_tip'] != 'ADMINISTRADOR' && $_SESSION['ident_tip'] == 1) {
              ?>
                <div class="col form-group">
                  <label class="form-label" for="ident_tip"><b>Tipo de Usuario: </b></label>
                  <?php 
                    $query_tip = mysqli_query($conexion,"SELECT * FROM tab_tip WHERE ident_tip != 1");
                    $result_tip = mysqli_num_rows($query_tip);
                  ?>
                  <select class="form-control" name="ident_tip" id="ident_tip" required>
                    <option disabled selected value>Seleccionar una Opción...</option>
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
            <?php 
                }
              ?>
            <!---Vocero -->
            <?php  
              if ($data['nombr_tip'] != 'VOCERO' && $_SESSION['ident_tip'] == 2) {
              ?>
                <div class="col form-group">
                  <label class="form-label" for="ident_tip"><b>Tipo de Usuario: </b></label>
                  <?php 
                    $query_tip = mysqli_query($conexion,"SELECT * FROM tab_tip WHERE ident_tip != 1 AND ident_tip != 2");
                    $result_tip = mysqli_num_rows($query_tip);
                  ?>
                  <select class="form-control" name="ident_tip" id="ident_tip" required>
                    <option disabled selected value>Seleccionar una Opción...</option>
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
            <?php 
                }
              ?>
          </div>
          <div id="hidden_div" style="display: none;">
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="usuar_jef"><b>Usuario: </b></label>
                <input type="text" class="form-control tipo" name="usuar_jef" autocomplete="off" id="usuar_jef" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
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
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Registrar Persona</button>
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

<?php require_once('includes/admin_footer.php');  ?>

<script type="text/javascript">
	$( document ).ready( function () {
  $( "#jefe_registro" ).validate( {
    rules: {
      cedul_jef: {
        required: true,
        number: true,
        minlength: 6,
        remote: {
          url: "jefe_cedula_availability.php",
          type: "post",
          data:
            {
              cedul_jef: function()
              {
                return $('#jefe_registro :input[name="cedul_jef"]').val();
              }
            }
        }     
      },
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
      calle_jef: {
        required: true
      },
      direc_jef: {
        required: true
      },
      seria_jef: {
        number: false
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
                return $('#jefe_registro :input[name="usuar_jef"]').val();
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
      cedul_jef: {
        required: "Ingrese una Cédula de Identidad",
        number: "Ingrese solo números",
        minlength: "La Cédula debe contener al menos 6 números",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
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
      calle_jef: {
        required: "Seleccione una Opcion"
      },
      direc_jef: {
        required: "Ingrese una Dirección"
      },
      seria_jef: {
        number: "Ingrese un Serial del Carnet"
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