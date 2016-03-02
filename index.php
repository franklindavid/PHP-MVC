<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
<link rel="stylesheet" type="text/css" href="views/default/css/loginStyle.css">

</head>
<body>
<form  method="post">
	<legend>Iniciar sesión</legend>
	<input type="text" placeholder="usuario" name="usuario" required>
	<input type="password" placeholder="contraseña" name="password" required>
	<input type="submit" name="iniciar_sesion" value="iniciar sesion">	
	<?php
	require 'model/users.class.php';
	if(isset($_POST["iniciar_sesion"])){	 
		$user=$_POST["usuario"];
        $pass=$_POST["password"];
		$usuario=new usuario();
		if($usuario->iniciar_sesion($user,$pass)){		
		header("location:index2.php?action");
	}		
	}
	?>
</form>
</body>
</html>
<!-- 8 de febrero-->