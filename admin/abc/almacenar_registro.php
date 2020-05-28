<?php
include '../../libreria/cmd.php';
$obj=new cmd(); 
  
$matricula=$_GET['matricula'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$user=$_GET['user'];
$pass=$_GET['pass'];
$tiempo=$_GET['tiempo'];
$especial=$_GET['especial'];
$ubicacion=$_GET['ubicacion'];

//echo "matricula: ".$matricula." nombre: ".$nombre." apellido: ".$apellido." user: ".$user." pass: ".$pass." tiempo: ".$tiempo." especial: ".$especial." ubicacion: ".$ubicacion;
$dias_en_segundos=(60*60*24*$tiempo+time());
//recibo parametros para verificar si la matricula ya existe en una reserva
$existe = $obj->ExistenciaB("Credenciales_Estudiantes","Matricula","'".$matricula."'");
if($existe>0){echo 0;}
if($existe==0){
if($especial=='true')
{
	//echo "usurario especial";
	$obj->Insertar("Credenciales_Estudiantes","'".$matricula."','".$nombre."','".$apellido."','".$user."','".$pass."',null,'Activo','verdadero','".$dias_en_segundos."',".$ubicacion);
}
else{
	//echo "usurario normal";
	$obj->Insertar("Credenciales_Estudiantes","'".$matricula."','".$nombre."','".$apellido."','".$user."','".$pass."',null,'Activo','falso','".$dias_en_segundos."',".$ubicacion);
}
echo 1;
}

    

?>
