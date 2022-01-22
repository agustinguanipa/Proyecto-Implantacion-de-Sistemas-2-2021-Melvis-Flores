<?php 
  session_start();

  if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');
?>

<?php 

include 'conexion.php';

if (empty($_GET['id'])) {
  header('location: persona_lista.php');
}

$id = $_GET['id'];

	$query_user = mysqli_query($conexion,"SELECT u.ident_per, u.cedul_per,u.nombr_per, u.apeli_per, u.fecna_per, u.telem_per, u.telec_per, u.email_per, u.calle_per, u.direc_per, u.tifam_per, u.tibom_per, u.seria_per, r.ident_jef, r.nombr_jef, r.apeli_jef FROM tab_per u INNER JOIN tab_jef r ON u.ident_jef = r.ident_jef WHERE ident_per = '$id' AND statu_per = '1'");
	
	
$result_user = mysqli_num_rows($query_user);

if ($result_user == 0) 
{
	header('location: persona_lista.php');
}else{
	$data_per = mysqli_fetch_array($query_user);
	
	$cedul_per = $data_per['cedul_per'];
  $nombr_per = $data_per['nombr_per'];
  $apeli_per = $data_per['apeli_per'];
  $fecna_per = $data_per['fecna_per'];
  $telem_per = $data_per['telem_per'];
  $telec_per = $data_per['telec_per'];
  $email_per = $data_per['email_per'];
  $calle_per = $data_per['calle_per'];
  $direc_per = $data_per['direc_per'];
  $tifam_per = $data_per['tifam_per'];
  $tibom_per = $data_per['tibom_per'];
  $seria_per = $data_per['seria_per'];
  $usuar_per = $data_per['usuar_per'];
  $ident_jef = $data_per['ident_jef'];
  $nombr_jef = $data_per['nombr_jef'];
  $apeli_jef = $data_per['apeli_jef'];
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
  				<form role="form" id="persona_editar" class="justify-content-center mx-3 my-1" align="center" enctype="multipart/form-data" action="../ajax/editar_persona.php" method="post">
  					<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		        <div class="form-row">
              <!--
              <div class="col form-group">
                <label class="form-label" for="cedul_per"><b>Cédula de Identidad: </b></label>
                <input type="text" class="form-control" name="cedul_per" autocomplete="off" id="cedul_per" value="<?php echo $cedul_per; ?>" maxlength="10" onkeyup="this.value = this.value.toUpperCase();">
              </div> 
              !-->
		          <div class="col form-group">
		            <label class="form-label" for="nombr_per"><b>Nombre: </b></label>
		            <input type="text" class="form-control" name="nombr_per" autocomplete="off" id="nombr_per" value="<?php echo $nombr_per; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
		          <div class="col form-group">
		            <label class="form-label" for="apeli_per"><b>Apellido: </b></label>
		            <input type="text" class="form-control" name="apeli_per" autocomplete="off" id="apeli_per" value="<?php echo $apeli_per; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
              <div class="col form-group">
                <label class="form-label" for="ident_jef"><b>Jefe de Familia: </b></label>
                <?php
                  include "conexion.php";
                  $query_jef = mysqli_query($conexion,"SELECT * FROM tab_jef");
                  $result_jef = mysqli_num_rows($query_jef);
                ?>
                <select class="form-control notItemOne" name="ident_jef" id="ident_jef">
                  <option value="<?php echo $ident_jef;?>"><?php echo $nombr_jef;?> <?php echo $apeli_jef;?></option>
                  <?php 
                    if ($result_jef > 0) {
                    while ($jef = mysqli_fetch_array($query_jef)) {?>
                    <option value="<?php echo $jef['ident_jef'];?>"><?php echo $jef['nombr_jef'];?> <?php echo $jef['apeli_jef'];?></option>
                  <?php
                  }
                  }
                  ?>
                </select>
              </div>
		        </div>
		        <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="fecna_per"><b>Fecha de Nacimiento: </b></label>
                <input type="date" class="form-control" name="fecna_per" autocomplete="off" value="<?php echo $fecna_per; ?>" id="fecna_per">
              </div>
              <div class="col form-group">
                <label class="form-label" for="telem_per"><b>Teléfono Celular: </b></label>
                <input type="text" class="form-control telem-mask" name="telem_per" autocomplete="off" id="telem_per" value="<?php echo $telem_per; ?>" maxlength="15">
              </div>
              <div class="col form-group">
                <label class="form-label" for="telec_per"><b>Teléfono de Casa: </b></label>
                <input type="text" class="form-control telec-mask" name="telec_per" autocomplete="off" id="telec_per" value="<?php echo $telec_per; ?>" maxlength="15">
              </div>
		          <div class="col form-group">
		            <label class="form-label" for="email_per"><b>E-Mail: </b></label>
		            <input type="email" class="form-control" name="email_per" autocomplete="off" value="<?php echo $email_per; ?>" id="email_per" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
		          </div>
		        </div>
		        <div class="form-row">
              <div class="col form-group col-lg-4">
                <label class="form-label" for="calle_per"><b>Calle o Carrera: </b></label>
                <select class="form-control notItemOne" id="calle_per" name="calle_per">
                  <option value="<?php echo $calle_per;?>"><?php echo $calle_per;?></option>
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
                <input type="text" class="form-control" name="direc_per" autocomplete="off" id="direc_per" value="<?php echo $direc_per; ?>" onkeyup="this.value = this.value.toUpperCase();">
              </div>
		        </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="tifam_per"><b>Tipo de Familiar: </b></label>
                <select class="form-control notItemOne" name="tifam_per" id="tifam_per">
                  <option value="<?php echo $tifam_per;?>"><?php echo $tifam_per;?></option>
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
                <select class="form-control notItemOne" id="tibom_per" name="tibom_per">
                  <option value="<?php echo $tibom_per;?>"><?php echo $tibom_per;?></option>
                  <option value="10 KG">10 KG</option>
                  <option value="18 KG">18 KG</option>
                  <option value="27 KG">27 KG</option>
                  <option value="43 KG">43 KG</option>
                  <option value="GRANEL">GRANEL</option>
                </select>
              </div>
              <div class="col form-group">
                <label class="form-label" for="seria_per"><b>Serial del Carnet de la Patria: </b></label>
                <input type="text" class="form-control" name="seria_per" autocomplete="off" id="seria_per" value="<?php echo $seria_per; ?>" maxlength="20">
              </div>
              <!--
              <div class="col form-group">
                <label class="form-label" for="usuar_per"><b>Usuario: </b></label>
                <input type="text" class="form-control" name="usuar_per" autocomplete="off" id="usuar_per" value="<?php echo $usuar_per; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              !-->
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
           <a href="persona_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
				</div>
    </div> 
  </div>
</div>

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#persona_editar" ).validate( {
    rules: {
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
        required: true,
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
      direc_per: {
        required: true
      },
      seria_per: {
        number: true
      },
    },

    messages: {
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
        required: "Ingrese un Número de Teléfono Valido",
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
      direc_per: {
        required: "Ingrese una Dirección"
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