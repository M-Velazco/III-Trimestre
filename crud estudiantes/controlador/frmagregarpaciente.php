<?php  //abrimos php
require "../Modelo/conexion.php";

if (!isset($_SESSION['user']))
	;

$objConexion = Conectarse();

$sql= "select PacIdentificacion, PacNombres from pacientes";

$resultado = $objConexion->query($sql);

//cerramos php ?>  



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Agregar estudiante</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="validaragregarpacientes.php">

  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">AGREGAR estudiante</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="identificacion"></label>
      <input name="identificacion" type="text" id="identificacion" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombres</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Apellidos</td>
      <td><label for="apellido"></label>
      <input name="apellido" type="text" id="apellido" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Fecha de Nacimiento</td>
      <td><label for="fechanacimiento"></label>
      <input name="fechanacimiento" type="date" id="fechanacimiento" size="40" style="width:270px" /></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#EAEAEA">Genero</td>
      <td><label for="genero"></label>
        <select name="genero" id="genero" style="width:270px">
          
          <option value="F">Femenino</option>
          <option value="M">Masculino</option>
      </select></td>
    </tr>
    
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>
</body>
</html>