
<?php
//Incluimos la programacion orientada a objetos
//echo '<script>alert("xxx");</script>';
include '../libreria/cmd.php';

$a=$_POST['matricula'];
$b=$_POST['nombre'];
$c=$_POST['apellido'];
$d=$_POST['dia'];
$e=$_POST['mes'];
$f=$_POST['year'];
$g=$_POST['nivel'];
$h=$_POST['estado'];
$i=$_POST['mail'];
$j=$_POST['contra'];

$fecha_nacimiento=$d.'/'.$e.'/'.$f;

//echo '<script>alert("'.$a.'--'.$b.'--'.$c.' -- '.$fecha_nacimiento.'--'.$g.'--'.$h.'--'.$i.'--'.$j.' ..--u");</script>';

$obj=new cmd(); 
$obj->Insertar("Credenciales_Estudiantes","'".$a."','".$b."','".$c."','".$fecha_nacimiento."','".$g."','".$h."','".$i."','".$j."'");
header('location: index.php');
?>

