<?php 

class ModCon{
	private $conexion;
public function conectar(){
$servidor="192.168.100.39:8000";
 $usuario="root";
 $clave="335@Thanos";
 $database="Sifaj";
$conexion= new mysqli($servidor,$usuario,$clave,$database);
if ($conexion->connect_errno){
 echo	" <center><h3><img src='img/DBError.jpg' width='60'>&nbsp;&nbsp;NOTA: Hay Errores En la Conexion a La Base de datos, No es Posible Acceder al Sistema</h3> </center>";}
return $conexion;
 	}
}

?>
