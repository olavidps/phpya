<?php 


	$varnombre=$_POST['nombre'];
	$varmail=$_POST['mail'];
	$varcurso=$_POST['curso'];

$conexion = mysql_connect('localhost','root',''); 
mysql_select_db('db1',$conexion);

$sql = "INSERT INTO alumnos (nombre,correo,codigocurso) VALUES ('$varnombre','$varmail','$varcurso')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
mysql_query($sql);


 ?>

