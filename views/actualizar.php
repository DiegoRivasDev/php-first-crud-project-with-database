<?php
	$actualizado;
	$arr = explode("-", $_GET['view']);
	$id = $arr[1];
	$row = $db->seleccionarPorId($id);
?>
<div class="col mb-5 <?php if($_SERVER["REQUEST_METHOD"] != "POST"){ echo 'animate__animated animate__backInDown';}?>">
	<h1 class="content-title mb-5">Modificar prestamo</h1>
	<form method="POST">
	<div class="col py-sm-3 ps-sm-5">
		<div class="col-sm-3 mb-3">
		    <label for="nombre-cliente" class="form-label">Nombre del Cliente</label>
		    <input type="text" class="form-control" id="nombre-cliente" name="nombre_cliente" value="<?php echo $row['nombre_cliente']; ?>">
  		</div>
  		<div class="col-sm-3 mb-3">
		    <label for="apellido-cliente" class="form-label">Apellido del Cliente</label>
		    <input type="text" class="form-control" id="apellido-cliente" name="apellido_cliente" value="<?php echo $row['apellido_cliente']; ?>">
  		</div>
  		<div class="col-sm-3 mb-3">
		    <label for="telefono-cliente" class="form-label">Telefono del Cliente</label>
		    <input type="text" class="form-control" id="telefono-cliente" name="telefono_cliente" value="<?php echo $row['telefono_cliente']; ?>">
  		</div>
  		<div class="col-sm-3">
		    <label for="direccion-cliente" class="form-label">Dirección del Cliente</label>
		    <input type="text" class="form-control" id="direccion-cliente" aria-describedby="descripcion-direccion" name="direccion_cliente" value="<?php echo $row['direccion_cliente']; ?>">
  		</div>
  		<div class="col-sm-3 mb-3">
		    <label for="nombre-libro" class="form-label">Nombre del Libro</label>
		    <input type="text" class="form-control" id="nombre-libro" name="nombre_libro" value="<?php echo $row['nombre_libro']; ?>">
  		</div>
  		<div class="col-sm-3 mb-3">
		    <label for="fecha-prestamo" class="form-label">Fecha de prestamo</label>
		    <input type="text" class="form-control" id="fecha-prestamo" name="fecha_prestamo" value="<?php echo $row['fecha_prestamo']; ?>">
  		</div>
  		<div class="col-sm-3 mb-3">
		    <label for="fecha-devolucion" class="form-label">Fecha de devolución</label>
		    <input type="text" class="form-control" id="fecha-devolucion" name="fecha_devolucion" value="<?php echo $row['fecha_devolucion']; ?>">
  		</div>

  		<div class="row">
  			<div class="col-auto">
  				<a href="?view=tabla" class="btn btn-danger">
		  			<i class="fa-solid fa-arrow-left text-white"></i>
		  			Regresar
  				</a>
  			</div>
  			<div class="col-auto">
  				<input type="submit" class="btn btn-primary" value="Modificar">
  			</div>
  		</div>
    </div>
   </form>
   <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$actualizado = $db->actualizar($id, $_POST);
			$_POST = array();
		}
	?>

	<div class="alert <?php if(isset($actualizado)){ if($actualizado){ echo 'alert-success'; } else { echo 'alert-danger'; } } ?> mt-3">
		<?php
			if(isset($actualizado)){
				if($actualizado){
  					echo 'El registro ha sido modificado satisfactoriamente!';
  				} else {
  					echo 'El registro no se ha podido actualizar, hubo un error!';
  				}
			}
		?>
	</div>
</div>
<script>
	const localeES = {
    days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', ],
    daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'],
    today: 'Hoy',
    clear: 'Cancelar',
    dateFormat: 'dd/mm/yyyy',
    timeFormat: 'hh:ii',
    firstDay: 1
	}

	new AirDatepicker('#fecha-prestamo', {
		dateFormat: 'yyyy-MM-dd',
		locale: localeES,
		position: 'top left'
	});

	new AirDatepicker('#fecha-devolucion', {
		dateFormat: 'yyyy-MM-dd',
		locale: localeES,
		position: 'top left'
	});
</script>