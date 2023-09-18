<?php
require "../modelo/conexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="select * from pacientes where PacIdentificacion = '$_REQUEST[Identificacion]'";
$resultadoPaciente = $objConexion->query($sql);

$paciente = $resultadoPaciente->fetch_object();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar estudiante</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="validaractualizarpaciente.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR estudiante</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="identificacion"></label>
      
      <input name="identificacion" type="text" id="identificacion" value="<?php echo $paciente->PacIdentificacion ?>" readonly size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombres</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" value="<?php echo $paciente->PacNombres?>" size="40"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Apellidos</td>
      <td><label for="apellido"></label>
      <input name="apellido" type="text" id="apellido" value="<?php echo $paciente->PacApellidos?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Fecha de Nacimiento</td>
      <td><label for="fechaNacimiento"></label>
      <input name="fechaNacimiento" type="date" id="fechaNacimiento" style="width:270px" value="<?php echo $paciente->PacFechaNacimiento ?>" size="40" /></td>
    </tr>
   
    <tr>
      <td align="right" bgcolor="#EAEAEA">Genero</td>
      <td><label for="genero"></label>
        <select name="genero" id="genero" style="width:270px">
          <option value="0">Seleccione</option>
          
          <?php 
			  
		  if ($paciente->PacSexo=="F")
		  {		  
		  ?>
              <option value="F" selected="selected">Femenino</option>
              <option value="M">Masculino</option>
          <?php
          }
		  else
		  {
          ?>
          		<option value="F">Femenino</option>
                <option value="M" selected="selected">Masculino</option>
          <?php
		  }
		  ?>          
      </select>
      
      </td>
    </tr>
   
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="Identificacion" type="hidden" value="<?php echo $_REQUEST['Identificacion'] ?>" />
  
  
</form>
</body>
</html>