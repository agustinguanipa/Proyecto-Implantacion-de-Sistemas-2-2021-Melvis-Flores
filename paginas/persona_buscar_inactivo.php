<?php 
	session_start();

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

  require_once('includes/admin_header.php');
?>

<?php 
	$busqueda = strtolower($_REQUEST['busqueda']);
	if (empty($busqueda)) {
		header('location: persona_lista_inactivo.php');
		mysqli_close($conexion);
	}
?>

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Personas Inactivas</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="persona_lista.php" class="btn btn-light text-dark"><i class="fa fa-users"></i> Personas Activas</a>
							<a href="persona_lista_inactivo.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Personas Inactivas</a>
						</div>
	        </div>
	    </div>
	    <div class="row" style="padding-top: 2px;">
	    	<div class="col-sm-8">
				</div>
				<form action="persona_buscar_inactivo.php" method="GET" class="col-sm-4" style="padding-top: 1px;">
					<div class="input-group">			
						<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar">
						<div class="input-group-append">
							<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
	    </div>
	    <hr>
	    <div>
	    	<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th class='text-center'>#</th>
							<th class='text-center'>Cedula</th>
							<th class='text-center'>Nombre</th>
							<th class='text-center'>Apellido</th>
							<th class='text-center'>Telef. Celular</th>
							<th class='text-center'>Email</th>
							<th class='text-center'>Restaurar</th>
						</tr>
						<?php 
							
						// Paginador 

							$sql_registe = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM tab_per WHERE 
								(ident_per LIKE '%busqueda%' OR
								cedul_per LIKE '%busqueda%' OR
								nombr_per LIKE '%busqueda%' OR
								apeli_per LIKE '%busqueda%' OR
								telem_per LIKE '%busqueda%' )
								AND statu_per = 0");
							$result_registe = mysqli_fetch_array($sql_registe);
							$total_registro = $result_registe['total_registro'];

							$por_pagina = 5;

							if (empty($_GET['pagina'])) 
							{
								$pagina = 1;
							}else{

								$pagina = $_GET['pagina'];
							}

							$desde = ($pagina-1) * $por_pagina;
							$total_paginas = ceil($total_registro / $por_pagina);

							$query = mysqli_query($conexion,"SELECT ident_per, cedul_per, nombr_per, apeli_per, telem_per FROM tab_per WHERE 
								( ident_per LIKE '%$busqueda%' OR
								cedul_per LIKE '%$busqueda%' OR  
								nombr_per LIKE '%$busqueda%' OR 
								apeli_per LIKE '%$busqueda%' OR 
								telem_per LIKE '%$busqueda%' )
								AND statu_per = 0  ORDER BY ident_per ASC LIMIT $desde,$por_pagina");
							mysqli_close($conexion);
							$result = mysqli_num_rows($query);

							if ($result > 0) {
							 	while ($data = mysqli_fetch_array($query)) {

							 		?>

							 		<tr class="row<?php echo $data['ident_per']; ?>">
										<td class='text-center'><?php echo $data['ident_per']; ?></td>
										<td class='text-center'><?php echo $data['cedul_per']; ?></td>
										<td class='text-center'><?php echo $data['nombr_per']; ?></td>
										<td class='text-center'><?php echo $data['apeli_per']; ?></td>
										<td class='text-center'><?php echo $data['telem_per']; ?></td>
										<td class='text-center'><?php echo $data['email_per']; ?></td>
										<td class='text-center'>
											<a href="persona_restaurar.php?id=<?php echo $data['ident_per']; ?>" class="restaurar"><i class="fa fa-check"></i></a>
										</td>
									</tr>

							 	<?php	
							 	}
							 } 
						?>
					</table>
				</div>
				<div class="paginador">
					<ul>
						<?php 
							if ($pagina != 1) 
							{
								?>
								<li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-step-backward"></i></a></li>
								<li><a href="?pagina=<?php echo $pagina-1; ?>"><i class="fas fa-backward"></i></a></li>
								<?php	
							}
						?>
						
						<?php 
							for ($i=1; $i <= $total_paginas; $i++) 
							{ 
								if ($i == $pagina) 
								{
									echo '<li class="pageSelected">'.$i.'</li>';
								}else{

									echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
								}
							}
						
							if ($pagina != $total_paginas) 
							{
								?>
								<li><a href="?pagina=<?php echo $pagina+1; ?>"><i class="fas fa-forward"></i></a></li>
								<li><a href="?pagina=<?php echo $total_paginas; ?>"><i class="fas fa-step-forward"></i></a></li>
								<?php
							}
						?>
			
					</ul>
				</div>
	    </div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>


                               		                            