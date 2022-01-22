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
  header('location: registro_lista.php');
}

$id = $_GET['id'];

  $query_reg = mysqli_query($conexion,"SELECT ident_reg, nombr_reg, fecre_reg, descr_reg FROM tab_reg WHERE ident_reg = '$id' AND statu_reg = 1");
  
$result_reg = mysqli_num_rows($query_reg);

if ($result_reg == 0) 
{
  header('location: registro_lista.php');
}else{
  $data_reg = mysqli_fetch_array($query_reg);
  
  $nombr_reg = $data_reg['nombr_reg'];
  $fecre_reg = $data_reg['fecre_reg'];
  $descr_reg = $data_reg['descr_reg'];
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
        <b>Editar Evento</b>
      </div>
      <div class="card-body">
        <form role="form" id="registro_editar" class="justify-content-center mx- my-1" align="center" enctype="multipart/form-data" action="../ajax/editar_registro.php" method="post">
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
          <div class="form-row">
            <div class="col form-group col-lg-8">
              <label class="form-label" for="nombr_reg"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_reg" autocomplete="off" id="nombr_reg"  maxlength="100" onkeyup="this.value = this.value.toUpperCase();" placeholder="Jornada, CLAP, Gas y otros" value="<?php echo $nombr_reg; ?>" required>
            </div>
            <div class="col form-group col-lg-4">
              <label class="form-label" for="fecre_reg"><b>Fecha de Registro: </b></label>
              <input type="date" class="form-control" name="fecre_reg" autocomplete="off" id="fecre_reg" placeholder="" value="<?php echo $fecre_reg; ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="descr_reg"><b>Descripción: </b></label>
              <input type="text" class="form-control" name="descr_reg" autocomplete="off" id="descr_reg" maxlength="100" onkeyup="this.value = this.value.toUpperCase();" placeholder="Lugar, Calle o Sitio" value="<?php echo $descr_reg; ?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Actualizar Evento</button>
              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div> 
        </form>    
      </div>
      <div class="card-footer">
         <a href="registro_lista.php" class="btn btn-info float-left"><i class="fa fa-arrow-left"></i> Volver al Listado</a> 
      </div>
    </div>
  </div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#registro_editar" ).validate( {
    rules: {
      nombr_reg: {
        required: true,
        minlength: 6
      },
      descr_reg: {
        required: true,
        minlength: 6
      },
      fecre_reg: {
        required: true
      },
    },

    messages: {
      nombr_reg: {
        required: "Ingrese un Nombre",
        minlength: "El Nombre debe contener al menos 6 caracteres"
      },
      descr_reg: {
        required: "Ingrese una Descripción",
        minlength: "La Descripcion debe contener al menos 6 caracteres"
      },
      fecre_reg: {
        required: "Ingrese una Fecha"
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

</script>