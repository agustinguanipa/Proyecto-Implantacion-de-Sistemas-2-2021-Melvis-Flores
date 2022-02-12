<?php
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }

  require_once ("conexion.php");
  require_once ("includes/funciones.php");  
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Panel de Control | Consejo Comunal Comunidad 12 de Octubre</title>
  <meta name="description" content="Consejo Comunal Comunidad 12 de Octubre | Comunidad de Comunidad 12 de Octubre, San Cristóbal, Estado Táchira, Venezuela">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_crud.css">
  <link rel="stylesheet" type="text/css" href="../css/foto.css">
  <link href="../libs/startbootstrap-simple-sidebar-gh-pages/css/simple-sidebar.css" rel="stylesheet">
  <link href="../libs/startbootstrap-simple-sidebar-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--- jQuery --->
  <script src="../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <!--- JS --->
  <script type="text/javascript" src="../js/funciones.js"></script>
  <script src="../libs/popper.min.js"></script>
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 Select--->
  <script type="text/javascript" src="../libs/bootstrap-select-1.13.12/dist/js/bootstrap-select.js"></script>
  <link rel="stylesheet" href="../libs/bootstrap-select-1.13.12/dist/css/bootstrap-select.css" type="text/css"/>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
  <!--- Bootstrap 4 File Style 2 --->
  <script type="text/javascript" src="../libs/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js"> </script>
  <!--- CKEditor --->
  <script src="../libs/ckeditor/ckeditor.js"></script>
  
</head>

<body>

<!-- Header --->

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right text-white" id="sidebar-wrapper">
      <div class="sidebar-heading" align="center">
        <a href="admin_panel.php" style="text-decoration: none;">
          <img src="../imagen/logo-cc12o.png" width="30" height="30" class="d-inline-block align-top" alt="">
          <span class="menu-collapsed" style="color: #FFF; font-size: 14px;"><b>Sistema de Gestión</b></span>
        </a>
      </div>
      <div class="list-group list-group-flush">
        <ul class="list-group">
          <li class="bg-dark text-light list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed justify-content-center">
              <small class="text-white">Comunidad 12 de Octubre</small>
          </li>
          <!-- Menu -->
          <a href="admin_panel.php" aria-expanded="false" class="bg-dark text-light list-group-item list-group-item-action flex-column align-items-start tamano-elemento-sidebar">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-home fa-fw mr-3"></span> 
                <span class="menu-collapsed">Inicio</span>
            </div>
          </a>
          <a href="noticia_lista.php" aria-expanded="false" class="bg-dark text-light list-group-item list-group-item-action flex-column align-items-start tamano-elemento-sidebar">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-newspaper fa-fw mr-3"></span> 
                <span class="menu-collapsed">Noticias</span>
            </div>
          </a>
          <a href="jefe_lista.php" aria-expanded="false" class="bg-dark text-light list-group-item list-group-item-action flex-column align-items-start tamano-elemento-sidebar">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-users fa-fw mr-3"></span> 
                <span class="menu-collapsed">Comunidad</span>
            </div>
          </a>
          <a href="registro_lista.php" aria-expanded="false" class="bg-dark text-light list-group-item list-group-item-action flex-column align-items-start tamano-elemento-sidebar">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-table fa-fw mr-3"></span> 
                <span class="menu-collapsed">COVID-19</span>
            </div>
          </a>
          <a href="admin_configuracion.php" aria-expanded="false" class="bg-dark text-light list-group-item list-group-item-action flex-column align-items-start tamano-elemento-sidebar">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-cogs fa-fw mr-3"></span> 
                <span class="menu-collapsed">Ajustes</span>
            </div>
          </a>
        </ul>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom deep-orange">
        <button class="btn btn-light" id="menu-toggle"><i class="fa fa-bars"></i></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php  if (isset($_SESSION['active'])) : ?>
              <li class="nav-item active">
                <a class="nav-link" style="color: #FFFFFF;">Hoy es <?php echo fechaC(); ?></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../index.php" style="color: #FFFFFF;"><i class="fa fa-home"></i> Bienvenido <?php echo $_SESSION['nombr_jef']; ?> <?php echo $_SESSION['apeli_jef']; ?></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="usuario_salir.php" style="color: #FFFFFF;"><i class="fa fa-sign-out-alt"></i> Cerrar Sesión</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </nav>

      <div class="container-fluid panel">