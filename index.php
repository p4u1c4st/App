<?php 
$servidor = "localost";
$usuario = "root";
$contraseña = "";
$basedatos = "escuela"
 
$conn = new mysqli($servidor,$usuario,$contraseña,$basedatos);

if ($conn->connect_error){
    die("conexion fallida:",$conn->connect_error);
}
echo "conexion exitosa a la base de datos";
?>