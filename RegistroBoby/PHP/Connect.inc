<?php
$server = "localhost"; //Ubicacion del servido de Base de Datos
$user = "root";//Usuario habilitado para la conexion
$pass = "rootroot";//Contraseña del usuario habilitado
$bd = "mibuenamigodatabase";//Nombre de la base de datos con la que vamos a trabajar
$conexion = mysqli_connect($server,$user,$pass,$bd) or Die("Error);//aca en caso de Error
//aca se abre la conexion
?>