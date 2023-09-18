<?php
require "../Modelo/conexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from estudiante where PacIdentificacion = '$_REQUEST[Identificacion]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: listarpacientes.php?x=3");  //x=3 quiere decir que se eliminó bien
else
	header("location: listarpacientes.php?x=4");  //x=4 quiere decir que no se pudo eliminar
?>
