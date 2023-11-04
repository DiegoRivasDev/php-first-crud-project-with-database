<?php

	if(isset($_GET['view'])){
		$arr = explode("-", $_GET['view']);
		$view = $arr[0];

		include 'views/'.$view.'.php';
	} else if(isset($_GET['delete'])){
		include 'views/eliminar.php';
	} else {
		include 'views/tabla.php';
	}
?>