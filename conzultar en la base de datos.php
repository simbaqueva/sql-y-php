<?php
/*hacemos el llamado que contiene las valores parametros conexion a la base de datos*/
requiere "conexionbasesdatos.php";
//creamos el objeto utilizando la extension mysqli
$objconexion = new mysqli($host,$user,$password,$basededatos);
//verificamos la conexion
if ($objconexion->connect_erno)
{
	echo "error de conexion a la base de datos" $objconexion->connect_error;
	exit()
}
//vamos a realizar el proceso para conzultar los pasientes

//guardamos en una variable la sentencia sql
$sql="select * from pacientes";
//asignar a una variable el resultado de la conzulta
$resultado=$objconexion->query($sql);

//procedemos a mmostrarlos en pantalla
$i=1
//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
while $datos $resultado->fetch_array())
{
	echo"<br> paciente"$i;
	echo"<br>";
	echo $datos["pacidentificacion"]."<br>";
	echo $datos["pacnombres"]."<br>";
	echo $datos["pacapellidos"]."<br>";
	echo $datos["pacfechanacimiento"]."<br>";ç
	echo $datos["sexo"]."<br>";
	$i++

}*/
?>