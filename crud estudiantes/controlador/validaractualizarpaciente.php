<?php
require "../Modelo/conexion.php";

extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update pacientes set PacIdentificacion='$_REQUEST[identificacion]', PacNombres = '$_REQUEST[nombre]', PacApellidos = '$_REQUEST[apellido]', PacFechaNacimiento = '$_REQUEST[fechaNacimiento]', PacSexo = '$_REQUEST[genero]' where PacIdentificacion = '$_REQUEST[Identificacion]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header("location: listarpacientes.php?x=1");  //x=1 quiere decir que se modifico bien
else
	header("location: listarEmpleadosObjetos.php?x=2");  //x=2 quiere decir que no se pudo modificar

?>


