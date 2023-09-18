<?php
require ( "../modelo\Paciente.php");
require "../modelo/conexion.php";

	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();
$objEmpleado = new Paciente();

$resultado=$objEmpleado->consultarPaciente();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar estudiante:)</title>
</head>

<body>
<h1 align="center"> LISTAR estudianteS</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td width="11%">No. Identificacion</td>
    <td width="16%">Nombres estudiante </td>
    <td width="19%">Apellidos estudiante</td>
    <td width="12%">Fecha de nacimiento estudiante</td>
    <td width="15%">sexo del estudiante </td> 
    
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
        <td align="center"><a href="eliminarpaciente.php?Identificacion=<?php echo $paciente->PacIdentificacion?>"><img src="controlador\Imagenes\eliminar.jpg" width="29" height="24" /></a></td>
        <td align="center"><a href="frmagregarpaciente.php?Identificacion=<?php echo $paciente->PacIdentificacion?>"><img src="../Imagenes/eliminar.jpg" width="29" height="24" /></a></td>
    </tr>
  <?php
  }
  ?>
</table>

<p>
<?php
if ($_REQUEST['x']==1)
  echo "Se ha actualizado el Empleado correctamente";
if ($_REQUEST['x']==2)
  echo "Problemas al actualizar el Empleado"; 
if ($_REQUEST['x']==3)
  echo "Se ha eliminado el Empleado correctamente";
if ($_REQUEST['x']==4)
  echo "Problemas al eliminar el Empleado";
if ($_REQUEST['x']==5)
  echo "Se ha insertado el Empleado correctamente";
if ($_REQUEST['x']==6)
  echo "Problemas al insertar el Empleado";

?>
<table>
<tr>
    <td align="center"><a href="../controlador/vistaPrincipal.php">Menu Principal</a></td>
</tr>
</table>
</body>
</html>