<?php
class Database {
	private $conexion;	
public function conectar(){
	if (!isset($this->conexion)){
		$this->conexion=(mysqli_connect("localhost","root","")) or die (mysql_error());
		mysqli_select_db($this->conexion,"db_antares")or die (mysql_error());
		mysqli_set_charset($this->conexion,"utf8");
	}
}
	public function consulta($sql){
		$resultado=mysqli_query($this->conexion,$sql);
		if (!$resultado){
			echo "mysql error: ".mysqli_error();
		}
		return $resultado;
	}
	
	public function desconectar(){
		mysqli_close($this->conexion);
	}
}
?>