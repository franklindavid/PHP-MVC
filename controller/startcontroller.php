<?php 
class inicio {	
	function logeado (){
	$pagina=file_get_contents('views/default/page.php');		
	$login=file_get_contents('views/default/modules/menu.php');		
	$html=preg_replace('/\#CONTENIDO\#/ms', $login, $pagina);
	$login=file_get_contents('views/default/modules/botonesModulo/b_cerrar_sesion.php');		
	$html=preg_replace('/\#HEADER\#/ms', $login, $pagina);		
	 $botones=new boton();
	 $html=$botones->crear_boton($html);
	//$margen=$this->margin;		
	$html=preg_replace('/\#MARGIN\#/ms',$_SESSION['margen'], $html);
	$this->view_page($html);
		}
	
	function modulo_contabilidad(){
		 require_once"model/db.class.php";	
		   $inicio=new Database();
           $inicio->conectar();		   
		 $idusuario=$_SESSION['codigo'];
		 $query=$inicio->consulta("SELECT * FROM menu_contabilidad WHERE idusuario='$idusuario'");
		 $fila=mysqli_fetch_array($query,MYSQL_ASSOC);
		$pagina=file_get_contents('views/default/page_contabilidad.php');
		if($fila['ct']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_ct.php');
			 $pagina=preg_replace('/\#ct\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#ct\#/ms', $boton, $pagina);
		 }		
		if($fila['mt']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_mt.php');
			 $pagina=preg_replace('/\#mt\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#mt\#/ms', $boton, $pagina);
		 }
		if($fila['ict']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_ict.php');
			 $pagina=preg_replace('/\#ict\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#ict\#/ms', $boton, $pagina);
		 }
		if($fila['mct']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_mct.php');
			 $pagina=preg_replace('/\#mct\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#mct\#/ms', $boton, $pagina);
		 }
		if($fila['ccp']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_ccp.php');
			 $pagina=preg_replace('/\#ccp\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#ccp\#/ms', $boton, $pagina);
		 }
		if($fila['p']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_p.php');
			 $pagina=preg_replace('/\#p\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#p\#/ms', $boton, $pagina);
		 }
		if($fila['cdf']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_cdf.php');
			 $pagina=preg_replace('/\#cdf\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#cdf\#/ms', $boton, $pagina);
		 }
		if($fila['msn']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_msn.php');
			 $pagina=preg_replace('/\#msn\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#msn\#/ms', $boton, $pagina);
		 }
		if($fila['lt']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_lt.php');
			 $pagina=preg_replace('/\#lt\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#lt\#/ms', $boton, $pagina);
		 }
		if($fila['cc']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_cc.php');
			 $pagina=preg_replace('/\#cc\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#cc\#/ms', $boton, $pagina);
		 }
		if($fila['i']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_i.php');
			 $pagina=preg_replace('/\#i\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#i\#/ms', $boton, $pagina);
		 }
		if($fila['pe']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_pe.php');
			 $pagina=preg_replace('/\#pe\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#pe\#/ms', $boton, $pagina);
		 }
		if($fila['reo']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_reo.php');
			 $pagina=preg_replace('/\#reo\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#reo\#/ms', $boton, $pagina);
		 }
		if($fila['cs']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_cs.php');
			 $pagina=preg_replace('/\#cs\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#cs\#/ms', $boton, $pagina);
		 }
		if($fila['td']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_td.php');
			 $pagina=preg_replace('/\#td\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#td\#/ms', $boton, $pagina);
		 }
		if($fila['dif']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_dif.php');
			 $pagina=preg_replace('/\#dif\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#dif\#/ms', $boton, $pagina);
		 }
		if($fila['u']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_u.php');
			 $pagina=preg_replace('/\#u\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#u\#/ms', $boton, $pagina);
		 }
		if($fila['nplo']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_nplo.php');
			 $pagina=preg_replace('/\#nplo\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#nplo\#/ms', $boton, $pagina);
		 }
		if($fila['mde']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_mde.php');
			 $pagina=preg_replace('/\#mde\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#mde\#/ms', $boton, $pagina);
		 }
		if($fila['c']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/boton_c.php');
			 $pagina=preg_replace('/\#c\#/ms', $boton, $pagina);			 
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#c\#/ms', $boton, $pagina);
		 }
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		if($_SESSION['contabilidad']){	
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_contabilidad.php');
			 $pagina=preg_replace('/\#BOTON1\#/ms', $boton, $pagina);
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON1\#/ms', $boton, $pagina);
		 }
		if($_SESSION['administrativo']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_administracion.php');
			$pagina=preg_replace('/\#BOTON2\#/ms', $boton, $pagina);
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON2\#/ms', $boton, $pagina);
		 } 
		 if($_SESSION['control_ips']){
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_control_ips.php');
			 $pagina=preg_replace('/\#BOTON3\#/ms', $boton, $pagina);}
			 
		else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON3\#/ms', $boton, $pagina);
		 } 
		 if($_SESSION['inmuebles']){
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_inmuebles.php');
			$pagina=preg_replace('/\#BOTON4\#/ms', $boton, $pagina);		 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON4\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['nomina']){
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_nomina.php');
			$pagina=preg_replace('/\#BOTON5\#/ms', $boton, $pagina);
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON5\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['presupuesto']){
		    $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_presupuesto.php');
			$pagina=preg_replace('/\#BOTON6\#/ms', $boton, $pagina);		
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON6\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['almacen']){
			 $boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_almacen.php');
			$pagina=preg_replace('/\#BOTON7\#/ms', $boton, $pagina);			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON7\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['almacen_laboratorio']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_almacen_laboratorio.php');
			$pagina=preg_replace('/\#BOTON8\#/ms', $boton, $pagina);
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON8\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['almacen_rx']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_almacen_rx.php');
			$pagina=preg_replace('/\#BOTON9\#/ms', $boton, $pagina);
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON9\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['laboratorio']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_laboratorio.php');
			$pagina=preg_replace('/\#BOTON10\#/ms', $boton, $pagina);		 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON10\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['imagenologia']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_imagenologia.php');
			$pagina=preg_replace('/\#BOTON11\#/ms', $boton, $pagina);		 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON11\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['historias_clinicas']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_historias_clinicas.php');
			$pagina=preg_replace('/\#BOTON12\#/ms', $boton, $pagina);
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON12\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['citas_medicas']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_citas_medicas.php');
			$pagina=preg_replace('/\#BOTON13\#/ms', $boton, $pagina);			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON13\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['cartera_financiera']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_cartera_financiera.php');
			$pagina=preg_replace('/\#BOTON14\#/ms', $boton, $pagina);			 			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON14\#/ms', $boton, $pagina);
		 }
		 if($_SESSION['activos_fijos']){
			$boton=file_get_contents('views/default/modules/botonesContabilidad/modulos/boton_activos_fijos.php');
			$pagina=preg_replace('/\#BOTON15\#/ms', $boton, $pagina);			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $pagina=preg_replace('/\#BOTON15\#/ms', $boton, $pagina);
		 }
		$this->view_page($pagina);
	}
	
	
	
//	$pagina=$this->load_template('Pagina Principal MVC');
//    $html=$this->load_page('views/default/modules/login.php');		
//	$pagina=$this->replace_content('/\#CONTENIDO\#/ms',$html,$pagina);
//	$this->view_page($pagina);
	
	function view_page ($html){		
		echo $html;
	}
//	function load_template($title='sin titulo'){
//	$pagina=$this->load_page('views/default/page.php');
//	return $pagina;
//	}
//	function load_page($page){
//		return file_get_contents($page);
//	}
//	private function replace_content ($in='/\#CONTENIDO\#/ms', $out,$pagina){
//		return preg_replace($in, $out, $pagina);
//	}	
}
class boton {		
	 function crear_boton($html){		
		 $_SESSION['margen']=0;
		 if($_SESSION['contabilidad']){	
			 $boton=file_get_contents('views/default/modules/botonesModulo/b_contabilidad.php');
			 $html=preg_replace('/\#BOTON1\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
		 }else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON1\#/ms', $boton, $html);
		 }
		if($_SESSION['administrativo']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_administrativo.php');
			$html=preg_replace('/\#BOTON2\#/ms', $boton, $html);
			$_SESSION['margen']=$_SESSION['margen']+200;
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON2\#/ms', $boton, $html);
		 } 
		 if($_SESSION['control_ips']){
			 $boton=file_get_contents('views/default/modules/botonesModulo/b_control_ips.php');
			 $html=preg_replace('/\#BOTON3\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON3\#/ms', $boton, $html);
		 }
		 if($_SESSION['inmuebles']){
			 $boton=file_get_contents('views/default/modules/botonesModulo/b_inmuebles.php');
			$html=preg_replace('/\#BOTON4\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON4\#/ms', $boton, $html);
		 }
		 if($_SESSION['nomina']){
			 $boton=file_get_contents('views/default/modules/botonesModulo/b_nomina.php');
			$html=preg_replace('/\#BOTON5\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON5\#/ms', $boton, $html);
		 }
		 if($_SESSION['presupuesto']){
		    $boton=file_get_contents('views/default/modules/botonesModulo/b_presupuesto.php');
			$html=preg_replace('/\#BOTON6\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;			
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON6\#/ms', $boton, $html);
		 }
		 if($_SESSION['almacen']){
			 $boton=file_get_contents('views/default/modules/botonesModulo/b_almacen.php');
			$html=preg_replace('/\#BOTON7\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON7\#/ms', $boton, $html);
		 }
		 if($_SESSION['almacen_laboratorio']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_almacen_laboratorio.php');
			$html=preg_replace('/\#BOTON8\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON8\#/ms', $boton, $html);
		 }
		 if($_SESSION['almacen_rx']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_almacen_rx.php');
			$html=preg_replace('/\#BOTON9\#/ms', $boton, $html);
			$_SESSION['margen']=$_SESSION['margen']+200;
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON9\#/ms', $boton, $html);
		 }
		 if($_SESSION['laboratorio']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_laboratorio.php');
			$html=preg_replace('/\#BOTON10\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON10\#/ms', $boton, $html);
		 }
		 if($_SESSION['imagenologia']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_imagenologia.php');
			$html=preg_replace('/\#BOTON11\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON11\#/ms', $boton, $html);
		 }
		 if($_SESSION['historias_clinicas']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_historias_clinicas.php');
			$html=preg_replace('/\#BOTON12\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON12\#/ms', $boton, $html);
		 }
		 if($_SESSION['citas_medicas']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_citas_medicas.php');
			$html=preg_replace('/\#BOTON13\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON13\#/ms', $boton, $html);
		 }
		 if($_SESSION['cartera_financiera']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_cartera_financiera.php');
			$html=preg_replace('/\#BOTON14\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON14\#/ms', $boton, $html);
		 }
		 if($_SESSION['activos_fijos']){
			$boton=file_get_contents('views/default/modules/botonesModulo/b_activos_fijos.php');
			$html=preg_replace('/\#BOTON15\#/ms', $boton, $html);
			 $_SESSION['margen']=$_SESSION['margen']+200;
			 
		}else{
			 $boton=file_get_contents('views/default/modules/borrador.php');
			 $html=preg_replace('/\#BOTON15\#/ms', $boton, $html);
		 }
    return $html;
	} 
	
	
}
?>