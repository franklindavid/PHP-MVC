<?php
require_once"db.class.php";
class usuario extends Database {	
	function iniciar_sesion($username,$password){
		session_start();
		$this->conectar();
		$query=$this->consulta("SELECT * FROM usuarios WHERE usuario='$username'");
		if($fila=mysqli_fetch_array($query,MYSQL_ASSOC)){
			if($password==$fila['password']){
			    $idusuario=$fila['codigo'];
			    $query2=$this->consulta("SELECT * FROM modulos WHERE idusuario='$idusuario'");
				$fila2=mysqli_fetch_array($query2,MYSQL_ASSOC);
				$this->desconectar();
			$_SESSION['codigo']=$fila['codigo'];
			$_SESSION['usuario']=$fila['usuario'];
			$_SESSION['contabilidad']=$fila2['contabilidad'];
			$_SESSION['administrativo']=$fila2['administrativo'];
			$_SESSION['control_ips']=$fila2['control_ips'];
			$_SESSION['nomina']=$fila2['nomina'];
			$_SESSION['presupuesto']=$fila2['presupuesto'];
			$_SESSION['almacen']=$fila2['almacen'];
			$_SESSION['almacen_laboratorio']=$fila2['almacen_laboratorio'];
			$_SESSION['almacen_rx']=$fila2['almacen_rx'];
			$_SESSION['laboratorio']=$fila2['laboratorio'];
			$_SESSION['historias_clinicas']=$fila2['historias_clinicas'];
			$_SESSION['citas_medicas']=$fila2['citas_medicas'];			
			$_SESSION['inmuebles']=$fila2['inmuebles'];
			$_SESSION['activos_fijos']=$fila2['activos_fijos'];	
			$_SESSION['cartera_financiera']=$fila2['cartera_financiera'];			
			$_SESSION['imagenologia']=$fila2['imagenologia'];
			$_SESSION['margen']=0;
				echo "usuario correcto";
				return true;
			}else{
				session_destroy();
				$this->desconectar();
				echo"<script>alert('contraseña incorrecta');</script>";				
				return false;
			}			
		}else{
			session_destroy();
			$this->desconectar();
			echo"<script>alert('este usuario no existe');</script>";			
			return false;
		}
	}
	function cerrar_sesion(){		
           if($_SESSION['usuario']){	
	        session_destroy();		
			   echo"sesion cerrada";
		   }else{
	           echo "no hay sesion abierta";
		   }
	}
	function comprobar_sesion(){		
		if(isset($_SESSION['codigo'])){ 			
		//echo "si hay sesion iniciada";
			return true;
		}else{
			//echo "no hay sesion iniciada";
			return false;
		}
	}
						   
}
?>