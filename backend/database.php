<?php
	class Database {
		private const HOST = "localhost";
		private const USER = "root";
		private const PASS = "";
		private const DATABASE_NAME = "biblioteca";
		private $connection;

		/**
		*	Realiza la conexion a la base de datos. Si hubo un error al momento de realizar la conexion, 
		* 	$connection será igual a false e imprimirá el mensaje del error.
		*/
		public function __construct(){

			try {
				$this->connection = mysqli_connect(self::HOST, self::USER, self::PASS, self::DATABASE_NAME);
			} catch (Exception $e){
				echo $e->getMessage();
			}
			
		}

		private function getConnection(){
			return $this->connection;
		}

		public function insertar($array_data){
			$nombre_cliente = $array_data['nombre_cliente'];
			$apellido_cliente = $array_data['apellido_cliente'];
			$telefono_cliente = $array_data['telefono_cliente'];
			$direccion_cliente = $array_data['direccion_cliente'];
			$nombre_libro = $array_data['nombre_libro'];
			$fecha_prestamo = $array_data['fecha_prestamo'];
			$fecha_devolucion = $array_data['fecha_devolucion'];

			$query = "INSERT INTO prestamo (nombre_cliente, apellido_cliente, telefono_cliente, direccion_cliente, nombre_libro, fecha_prestamo, fecha_devolucion) VALUES('".$nombre_cliente."','".$apellido_cliente."','".$telefono_cliente."','".$direccion_cliente."','".$nombre_libro."','".$fecha_prestamo."','".$fecha_devolucion."')";

			$result = mysqli_query($this->getConnection(), $query);
			
			return $result;
		} 

		public function actualizar($id, $array_data){
			$nombre_cliente = $array_data['nombre_cliente'];
			$apellido_cliente = $array_data['apellido_cliente'];
			$telefono_cliente = $array_data['telefono_cliente'];
			$direccion_cliente = $array_data['direccion_cliente'];
			$nombre_libro = $array_data['nombre_libro'];
			$fecha_prestamo = $array_data['fecha_prestamo'];
			$fecha_devolucion = $array_data['fecha_devolucion'];

			$query = "UPDATE prestamo SET nombre_cliente='".$nombre_cliente."',apellido_cliente='".$apellido_cliente."',telefono_cliente='".$telefono_cliente."',direccion_cliente='".$direccion_cliente."',nombre_libro='".$nombre_libro."',fecha_prestamo='".$fecha_prestamo."',fecha_devolucion='".$fecha_devolucion."' WHERE id = '".$id."'";

			$result = mysqli_query($this->getConnection(), $query);
			return $result;
		}

		public function seleccionar_todo(){
			$query = 'SELECT * FROM prestamo';
			$result = mysqli_query($this->getConnection(), $query);

			if($result){
				$array_data = [];
				$row = mysqli_fetch_array($result);

				while($row){
					array_push($array_data, $row);
					$row = mysqli_fetch_array($result);
				}

				return $array_data;
			} else {
				return $result;
			}
		}

		public function seleccionarPorId($id){
			$query = "SELECT * FROM prestamo WHERE id='".$id."'";
			$result = mysqli_query($this->getConnection(), $query);

			if($result){
				return mysqli_fetch_array($result);
			} else {
				return $result;
			}
		}

		public function eliminar($id){
			$query = "DELETE FROM prestamo  WHERE id='".$id."'";
			$result = mysqli_query($this->getConnection(), $query);

			return $result;
		}

	}
?>