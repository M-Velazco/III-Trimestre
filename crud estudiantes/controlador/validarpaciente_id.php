<?php
// Include the database connection and any necessary configurations
require "../modelo/conexion.php";
require "../modelo\Paciente.php"; // Asegúrate de que la ubicación sea correcta

// Verificar si se envió la identificación desde el formulario
if (isset($_POST['identificacion'])) {
    $identificacion = $_POST['identificacion'];

    // Realizar la consulta
    $objConexion=Conectarse();
    $objEmpleado = new Paciente();
    
    $resultado=$objEmpleado->consultarpaciente_id($identificacion);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
       
        // Iterar sobre los resultados y mostrarlos en una tabla
        
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar estudiantes:)</title>
</head>

<body>
<h1 align="center"> LISTAR PACIENTES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">No. Identificacion</td>
    <td width="16%">Nombres estudiantes </td>
    <td width="19%">Apellidos estudiantes</td>
    <td width="12%">Fecha de nacimiento estudiantes</td>
    <td width="15%">sexo del estudiantes </td> 
    
    <td width="7%">Editar</td>
    <td width="10%">Eliminar</td> 
    <td width="10%">agregar</td> 
  </tr>
  
  <?php
  //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
  while ($paciente = $resultado->fetch_object())
  {
	?>
	<tr bgcolor="#CCCCFF">
        
        <td><?php  echo  $paciente->PacIdentificacion  ?>     </td>
        <td><?php  echo  $paciente->PacNombres  ?> </td>
        <td><?php  echo  $paciente->PacApellidos  ?></td>
        <td><?php  echo  $paciente->PacFechaNacimiento  ?></td>
        <td><?php  echo  $paciente->PacSexo ?></td> 
        
        <td align="center"><a href="frmactualizarpaciente.php?Identificacion=<?php echo $paciente->PacIdentificacion?>"><img src="../Imagenes/editar.jpg"  width="29" height="24" /></a></td>
        <td align="center"><a href="eliminarpaciente.php?Identificacion=<?php echo $paciente->PacIdentificacion?>"><img src="../Imagenes/eliminar.jpg" width="29" height="24" /></a></td>
        <td align="center"><a href="frmagregarpaciente.php?Identificacion=<?php echo $paciente->PacIdentificacion?>"><img src="../Imagenes/eliminar.jpg" width="29" height="24" /></a></td>
    </tr>
  <?php
  } }  }
  ?>
</table>