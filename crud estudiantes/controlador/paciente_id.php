<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BIENVENIDOS   </title>
</head>

<body>

<br>
<br>
<form id="form1" name="form1" method="post" action="validarpaciente_id.php">
  <table width="31%" border="0" align="center">
    <tr bgcolor="#CCCC00">
      <td colspan="2" align="center" bgcolor="#CCFF99" class="texto" >ingresa numero de identificacion</td>
    </tr>
    
    <tr>
      <td align="right">identificacion:</td>
      <td><label for="identificacion"></label>
      <input name="identificacion" type="text" id="identificacion" size="40" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCFF99"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>

<?php


?>


</body>
</html>