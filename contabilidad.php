<?php
require 'model/users.class.php';
require 'controller/startcontroller.php';
session_start();

if ( $_GET['action'] == 'cerrarsesion' ){
}
else{	
    $cargar_modulo=new inicio();
    $cargar_modulo->modulo_contabilidad();	
	if (!$_SESSION['codigo']) {
		header("Location: index.php");		
	                          }
	}

?>