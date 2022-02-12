<?php 
	require_once('includes/admin_header.php');

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php 
	$busqueda = strtolower($_REQUEST['busqueda']);
	if (empty($busqueda)) {
		header('location: jefe_lista.php');
		mysqli_close($conexion);
	}
?>

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Comunidad <b>Personas</b></h2>
						</div>
						<div class="col-sm-6">
							<!-- <a href="jefe_lista.php" class="btn btn-light text-dark"><i class="fa fa-users"></i> Jefes de Familia Activos</a>
							<a href="jefe_lista_inactivo.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Jefes de Familia Inactivos</a> -->
						</div>
	        </div>
	    </div>
	    <div class="row" style="padding-top: 2px;">
	    	<div class="col-sm-8">
					<a href="jefe_registro.php" class="btn btn-info float-left"><i class="fa fa-plus"></i> Registrar Persona</a>
				</div>
				<form action="jefe_buscar.php" method="GET" class="col-sm-4" style="padding-top: 1px;">
					<div class="input-group">			
						<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>" onkeyup="this.value = this.value.toUpperCase();">
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
							<th class='text-center'>Cédula</th>
							<th class='text-center'>Nombre</th>
							<th class='text-center'>Apellido</th>
							<th class='text-center'>Telef. Celular</th>
							<th class='text-center'>Tipo</th>
							<th class='text-center'>Ver</th>
							<th class='text-center'>Editar</th>
							<th class='text-center'>Borrar</th>
						</tr>
						<?php 
							
						//Paginador 

							$tip = '';
							if ($busqueda == 'ADMINISTRADOR') 
							{
								$tip = " OR tip LIKE '%1%' ";

							}else if ($busqueda == 'VOCERO') 
								{
									$tip = " OR tip LIKE '%2%' ";

								}else if ($busqueda == 'JEFE DE CALLE') 
									{
										$tip = " OR tip LIKE '%3%' ";
									}else if ($busqueda == 'CIUDADANO') 
									{
										$tip = " OR tip LIKE '%4%' ";
									} 
							$sql_registe = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM tab_jef WHERE 
								(ident_jef LIKE '%busqueda%' OR
								cedul_jef LIKE '%busqueda%' OR
								nombr_jef LIKE '%busqueda%' OR
								apeli_jef LIKE '%busqueda%' OR
								telem_jef LIKE '%busqueda%' OR
								usuar_jef LIKE '%busqueda%' 
								$tip)
								AND statu_jef = 1");
							$result_registe = mysqli_fetch_array($sql_registe);
							$total_registro = $result_registe['total_registro'];

							$por_pagina = 10;

							if (empty($_GET['pagina'])) 
							{
								$pagina = 1;
							}else{

								$pagina = $_GET['pagina'];
							}

							$desde = ($pagina-1) * $por_pagina;
							$total_paginas = ceil($total_registro / $por_pagina);

							$query = mysqli_query($conexion,"SELECT u.ident_jef, u.cedul_jef, u.nombr_jef, u.apeli_jef, u.telem_jef, r.nombr_tip FROM tab_jef u INNER JOIN tab_tip r ON u.ident_tip = r.ident_tip WHERE 
								( u.ident_jef LIKE '%$busqueda%' OR
								u.cedul_jef LIKE '%$busqueda%' OR  
								u.nombr_jef LIKE '%$busqueda%' OR 
								u.apeli_jef LIKE '%$busqueda%' OR 
								u.telem_jef LIKE '%$busqueda%' OR
								r.ident_tip LIKE '%$busqueda%' )
								AND statu_jef = 1  ORDER BY ident_jef ASC LIMIT $desde,$por_pagina");
							mysqli_close($conexion);
							$result = mysqli_num_rows($query);

							if ($result > 0) {
							 	while ($data = mysqli_fetch_array($query)) {
							 		?>

							 		<tr class="row<?php echo $data['ident_jef']; ?>">
										<td class='text-center'><?php echo $data['ident_jef']; ?></td>
										<td class='text-center'><?php echo $data['cedul_jef']; ?></td>
										<td class='text-center'><?php echo $data['nombr_jef']; ?></td>
										<td class='text-center'><?php echo $data['apeli_jef']; ?></td>
										<td class='text-center'><?php echo $data['telem_jef']; ?></td>
										<td class='text-center'><?php echo $data['nombr_tip']; ?></td>
										<td class='text-center'>
											<a href="jefe_ver.php?id=<?php echo $data['ident_jef']; ?>" class="look"><i class="fa fa-eye"></i></a>
										</td>
										<td class='text-center'>
											<a href="jefe_editar.php?id=<?php echo $data['ident_jef']; ?>" class="edit"><i class="fa fa-edit"></i></a>
										</td>
										<td class='text-center'>
											<?php  
												if ($data['nombr_tip'] != 'ADMINISTRADOR') {
												?>
													<a href="jefe_borrar.php?id=<?php echo $data['ident_jef']; ?>" class="delete eliminar"><i class="fa fa-trash-alt"></i></a>
													
												<?php	
												}
											?>
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
