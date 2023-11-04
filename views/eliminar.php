<?php
	$eliminado;

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$eliminado = $db->eliminar($id);
	}
?>
<div class="col">
	<div class="alert <?php if($eliminado){ echo 'alert-success'; } else { echo 'alert-danger'; } ?> animate__animated animate__shakeX" role="alert">
  		<?php 
  			if($eliminado){
  				echo 'El registro ha sido eliminado satisfactoriamente!';
  			} else {
  				echo 'El registro no se ha podido eliminar, hubo un error!';
  			}
  		?>
	</div>
	<div class="col text-end">
		<a href="?view=tabla" class="btn btn-primary">Continuar</a>
	</div>
</div>