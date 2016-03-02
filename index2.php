<?php
require 'model/users.class.php';
require 'controller/startcontroller.php';
session_start();
if ( $_GET['action'] == 'cerrarsesion' ){
	$final=new usuario();
	$final->cerrar_sesion();
	header("Location: index.php");
}else if( $_GET['action'] == 'contabilidad' ){	
//	$cargar_modulo=new inicio();
//	$cargar_modulo->modulo_contabilidad();
	header("Location: contabilidad.php?action");
}
else{	
   $inicio=new inicio();
   $inicio->logeado();
	if (!$_SESSION['codigo']) {
		header("Location: index.php");		
	}
   //$botones=new boton();
   //$botones->comprobar_boton();
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