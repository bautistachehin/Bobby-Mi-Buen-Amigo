<?php
include("Connect.inc");

$obj = json_decode($_GET["dat"]);
$sql = "select cod_usu, nombre, apellido from usuario where usuario ='" . $obj->{"usuario"}."' and password ='" . $obj->{"password"}."'";
//ECHO $sql;

if(!$result = mysqli_query($conexion, $sql))  die("error"); 
  {  
    $u = array();
    while($row = mysqli_fetch_assoc($result))
    {
      $u[]=$row;
    }
    
    $close = mysqli_close($conexion);
    $json_string = json_encode($u);
    echo $json_string;
  }
?>