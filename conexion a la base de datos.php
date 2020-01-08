<?php
$host="localhost";
$user="root";
$password="sena";
$basedatos="centromedico";
$objconexion = new mysqli($host,$user,password,$basedatos);
if($objconexion->connect_erno)
{
	echo "error de conexion a la base de datos",$objconexion->connect_error;
	exit();
}
	else
{
echo "conectados al servidor y listos para utilizar la base de datos",$basedatos;
}
?>






<?php
require "conexionbasedatos.php";
$objconexion=new mysqli($host,$user,password,$basedatos);
if($objconexion->connect_erno)
{
	echo "error de conexion a la base de datos",$objconexion->connect_error;
	exit();
}
	else
{
echo "conectados al servidor y listos para utilizar la base de datos",$basedatos;
}
?>