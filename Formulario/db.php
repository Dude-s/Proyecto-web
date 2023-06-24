<?php
		$conn =new mysqli('localhost', 'root', '150803' , 'formulario');

		if(!$conn){
			die("Error de conexion: " . mysqli_connect_error());
		}
?>