<?php
//Se reciben los datos del formulario
require "../modelo/conexion.php";
require "../modelo/Paciente.php";
extract ($_REQUEST);

//Forma utilizando la Clase Empleado

$objEmpleado = new Paciente();

$objEmpleado->crearPaciente($_REQUEST['identificacion'] , $_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['fechanacimiento'], $_REQUEST['genero']);

$resultado = $objEmpleado->agregarPaciente();

if ($resultado)
	header("location: listarpacientes.php?x=5");  //x=5 quiere decir que se agrego bien
else
	header("location: listarpacientes.php?x=6");  //x=6 quiere decir que no se pudo agregar

?>