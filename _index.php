<?php
require 'model/users.class.php';
require 'controller/startcontroller.php';
//echo $_SESSION['codigo'];
//echo $_SESSION['usuario'];
$inicio=new inicio();
if ( $_GET['action'] == 'sesionexitosa' ){
	echo"exito!";
	$inicio->logeado();
}else{	
    $inicio->login();
	$usuario=new usuario();
	if(isset($_POST["iniciar_sesion"])){
		$user=$_POST["usuario"];
	    $pass=$_POST["password"];
	if($usuario->inisiar_sesion($user,$pass)){
		$_GET['action']=='sesionexitosa';
		//header("location:index.php?action=sesionexitosa.php");
	}		
	}
}





//$usuario=new usuario();
//$usuario->inisiar_sesion("antares","0706");
//$usuario->cerrar_sesion();
//if ($usuario->comprobar_sesion()){	
//	echo "hay sesion";
//}else{	
//	echo "no hay sesion";	
//	$inicio=new inicio();
//    $inicio->login();
//if(isset($_POST["iniciar_sesion"])){
//	//echo"<script>alert('logeando');</script>";	
//	$user=$_POST["usuario"];
//	$pass=$_POST["password"];
//	if($usuario->inisiar_sesion($user,$pass)){
//		$inicio->logeado();	
//		header("location:index.php?action=sesionexitosa.php");
//	}		
//	//header("Location: index.php");
//	}
////}
?>