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
        <form role="form" id="persona_registro" class="justify-content-center mx- my-1" align="center" enctype="multipart/form-data" action="../ajax/guardar_persona.php" method="post">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="cedul_per"><b>Cédula de Identidad: </b></label>
              <input type="text" class="form-control" name="cedul_per" autocomplete="off" id="cedul_per" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="nombr_per"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_per" autocomplete="off" id="nombr_per" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="apeli_per"><b>Apellido: </b></label>
              <input type="text" class="form-control" name="apeli_per" autocomplete="off" id="apeli_per" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="fecna_per"><b>Fecha de Nacimiento: </b></label>
              <input type="date" class="form-control" name="fecna_per" autocomplete="off" id="fecna_per" placeholder="">
            </div>
            <div class="col form-group">
              <label class="form-label" for="telem_per"><b>Teléfono Celular: </b></label>
              <input type="text" class="form-control telem-mask" name="telem_per" autocomplete="off" id="telem_per" placeholder="(0000) 000 0000" maxlength="15">
            </div>
            <div class="col form-group">
              <label class="form-label" for="telec_per"><b>Teléfono de Casa: </b></label>
              <input type="text" class="form-control telec-mask" name="telec_per" autocomplete="off" id="telec_per" placeholder="(0000) 000 0000" maxlength="15">
            </div>
            <div class="col form-group">
              <label class="form-label" for="email_per"><b>E-Mail: </b></label>
              <input type="email" class="form-control" name="email_per" autocomplete="off" id="email_per" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group col-lg-4">
              <label class="form-label" for="calle_per"><b>Calle o Carrera: </b></label>
              <select class="form-control" id="calle_per" name="calle_per">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="AVENIDA ESPANA">AVENIDA ESPANA</option>
                <option value="AVENIDA UNIVERSIDAD">AVENIDA UNIVERSIDAD</option>
                <option value="CALLE 2">CALLE 2</option>
                <option value="CARRERA 6">CARRERA 6</option>
                <option value="CARRERA 7">CARRERA 7</option>
                <option value="CARRERA 8">CARRERA 8</option>
              </select>
            </div>
            <div class="col form-group col-lg-8">
              <label class="form-label" for="direc_per"><b>Dirección: </b></label>
              <input type="text" class="form-control" name="direc_per" autocomplete="off" id="direc_per" placeholder="Residencia / Urbanizacion" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="ident_jef"><b>Jefe de Familia: </b></label>
              <?php 
                $query_jef = mysqli_query($conexion,"SELECT * FROM tab_jef");
                $result_jef = mysqli_num_rows($query_jef);
              ?>
              <select class="form-control" name="ident_jef" id="ident_jef">
                <option disabled selected value>Seleccionar una Opción...</option>
                <?php 
                  if ($result_jef > 0) {
                  while ($jef = mysqli_fetch_array($query_jef)) {?>
                  <option value="<?php echo $jef['ident_jef'];?>"><?php echo $jef['ident_jef'];?> - <?php echo $jef['nombr_jef'];?> <?php echo $jef['apeli_jef'];?></option>
                <?php
                }
                }
                ?>
              </select>
            </div>
            <div class="col form-group">
              <label class="form-label" for="tifam_per"><b>Tipo de Familiar: </b></label>
              <select class="form-control" id="tifam_per" name="tifam_per">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="MADRE/PADRE">MADRE/PADRE</option>
                <option value="ESPOSA/ESPOSO">ESPOSA/ESPOSO</option>
                <option value="NUERA/YERNO">NUERA/YERNO</option>
                <option value="SUEGRA/SUEGRO">SUEGRA/SUEGRO</option>
                <option value="ABUELA/ABUELO">ABUELA/ABUELO</option>
                <option value="NIETO/NIETA">NIETO/NIETA</option>
                <option value="HERMANA/HERMANO">HERMANA/HERMANO</option>
                <option value="CUÑADA/CUÑADO">CUÑADA/CUÑADO</option>
                <option value="TIA/TIO">TIA/TIO</option>
                <option value="SOBRINA/SOBRINO">SOBRINA/SOBRINO</option>
                <option value="HIJA/HIJO">HIJA/HIJO</option>
                <option value="PRIMA/PRIMO">PRIMA/PRIMO</option>
                <option value="CONCUBINA/CONCUBINO">CONCUBINA/CONCUBINO</option>
              </select>
            </div>
            <div class="col form-group">
              <label class="form-label" for="tibom_per"><b>Tipo de Bombona: </b></label>
              <select class="form-control" id="tibom_per" name="tibom_per">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="10 KG">10 KG</option>
                <option value="18 KG">18 KG</option>
                <option value="27 KG">27 KG</option>
                <option value="43 KG">43 KG</option>
                <option value="GRANEL">GRANEL</option>
              </select>
            </div>
            <div class="col form-group">
              <label class="form-label" for="seria_per"><b>Serial del Carnet de la Patria: </b></label>
              <input type="text" class="form-control" name="seria_per" autocomplete="off" id="seria_per" placeholder="0123456789" maxlength="20">
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
         <a href="persona_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
			</div>
    </div>
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

<script type="text/javascript">
	$( document ).ready( function () {
  $( "#persona_registro" ).validate( {
    rules: {
      cedul_per: {
        required: true,
        number: true,
        minlength: 6,
        remote: {
          url: "persona_cedula_availability.php",
          type: "post",
          data:
            {
              cedul_per: function()
              {
                return $('#persona_registro :input[name="cedul_per"]').val();
              }
            }
        }     
      },
      nombr_per: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apeli_per: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      fecna_per: {
        required: true
      },
      telem_per: {
        number: false,
        minlength: 15
      },
      telec_per: {
        number: false,
        minlength: 15
      },
      email_per: {
        email: true
      },
      calle_per: {
        required: true
      },
      direc_per: {
        required: true
      },
      ident_jef: {
        required: true
      },
      tifam_per: {
        required: true
      },
      tibom_per: {
        required: true
      },
      seria_per: {
        number: true
      },
    },

    messages: {
      cedul_per: {
        required: "Ingrese una Cédula de Identidad",
        number: "Ingrese solo números",
        minlength: "La Cédula debe contener al menos 6 números",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
      nombr_per: {
        required: "Ingrese un Nombre",
        lettersonly: "El Nombre solo debe contener letras sin espacios",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      apeli_per: {
        required: "Ingrese un Apellido",
        lettersonly: "El Apellido solo debe contener letras sin espacios",
        minlength: "El Apellido debe contener al menos 2 caracteres"
      },
      fecna_per: {
        required: "Ingrese una Fecha de Nacimiento"
      },
      telem_per: {
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      telec_per: {
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_per: {
        email: "Ingrese una Dirección de Correo Electrónico Válida"
      },
      calle_per: {
        required: "Seleccione una Opcion"
      },
      direc_per: {
        required: "Ingrese una Dirección"
      },
      ident_jef: {
        required: "Seleccione una Opcion"
      },
      tifam_per: {
        required: "Seleccione una Opcion"
      },
      tibom_per: {
        required: "Seleccione una Opcion"
      },
      seria_per: {
        number: "Ingrese solo números"
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