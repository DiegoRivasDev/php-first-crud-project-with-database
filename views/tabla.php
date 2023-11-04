<?php
	$array_data = $db->seleccionar_todo();
?>
<div class="col animate__animated animate__bounceIn">
	<div class="text-end">
		<a href="?view=insertar" class="btn btn-success">REALIZAR PRESTAMO</a>
	</div>
<table class="table table-striped table-hover">
	<thead>
	   <tr>
	     <th scope="col">ID</th>
	     <th scope="col">Nombre del Cliente</th>
	     <th scope="col">Apellido del Cliente</th>
	     <th scope="col">Telefono del Cliente</th>
	     <th scope="col">Direccion del Cliente</th>
	     <th scope="col">Nombre del Libro</th>
	     <th scope="col">Fecha de prestamo</th>
	     <th scope="col">Fecha de devolucion</th>
	     <th scope="col">Acciones</th>
	   </tr>
	</thead>

	<tbody>
		<?php
			if($array_data){
				foreach ($array_data as $data) {
				
		?>
		<tr>
			<th scope="row"><?php echo $data['id'] ?></th>
			<td><?php echo $data['nombre_cliente'] ?></td>
			<td><?php echo $data['apellido_cliente'] ?></td>
			<td><?php echo $data['telefono_cliente'] ?></td>
			<td><?php echo $data['direccion_cliente'] ?></td>
			<td><?php echo $data['nombre_libro'] ?></td>
			<td><?php echo $data['fecha_prestamo'] ?></td>
			<td><?php echo $data['fecha_devolucion'] ?></td>
			<td>
				<div class="row">
					<div class="col">
						<a href="?view=actualizar-<?php echo $data['id'] ?>"><i class="fa-solid fa-pen-to-square text-primary"></i></a>
					</div>
					<div class="col">
						<a href="?delete=<?php echo $data['id'] ?>"><i class="fa-solid fa-trash text-danger"></i></a>
					</div>
				</div>
			</td>
		</tr>
		<?php
				}
			}
		?>
	</tbody>
</table>
</div>