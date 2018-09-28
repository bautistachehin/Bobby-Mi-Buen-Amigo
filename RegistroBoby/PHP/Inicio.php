<?php
//include("connect.inc");

$server = "localhost"; //Ubicacion del servido de Base de Datos
$user = "root";//Usuario habilitado para la conexion
$pass = "rootroot";//Contraseña del usuario habilitado
$bd = "mibuenamigodatabase";//Nombre de la base de datos con la que vamos a trabajar
$conexion = mysqli_connect($server, $user, $pass, $bd); 

if($conexion->connect_error){
    die("fallo la conexion". $conexion->connect_error);
}

$obj = json_decode($_GET["data"]);
$sql = "select cod_usu, nombre, apellido from usuario where usuario ='" + $obj ->{"usuario"}+"' and password ='" + $obj -> {"password"}+"'";
if(!$result = mysqli_query($conexion, $sql))die();
{
    $u = array();
    while($row = mysqli_fetch_array($result))
    {
    $id = $row['cod_usu'];
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $u[] = array('id' => $id,'nombre' => $nombre, 'apellido' => $apellido);
    }
$close = mysqli_close($conexion);
$json_string = json_encode($u);
echo $json_string;
}
?>