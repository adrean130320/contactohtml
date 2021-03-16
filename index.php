<!doctype html>
<html lang="en">
<head>
<title>  correo </title>
</head>

<body>

<form  method  ="post">
	 
	<label for="nombre">nombres y apellidos:</label>
	<input type="text"  placeholder="escribe tu nombre" name="nombre" id="nombre" required="">
	<br>  </br>
	<label for="asunto">Asunto:</label>
	<input type="text"  placeholder="asunto" name="asunto" id="asunto" required="">
<br>  </br>
	<label for="email">email:</label>
	<input type="email"  placeholder="email" name="email" id="email" required="">
	<br>  </br>
	<label for="mensaje">mensaje:</label>
	<textarea   name="mensaje" id="mensaje" required="" > </textarea>
	<br>  </br>
	<input type="submit" value="enviar" id="enviar">
</form>
<?php
include ("correo.php");
?>
</body>


</html>