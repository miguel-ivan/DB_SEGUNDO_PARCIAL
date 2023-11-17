<?php 
require_once "conexion.php";

$cuidad = $_POST ["city"];
$estado = $_POST ["state"];

$consulta = "SELECT * FROM usuarios WHERE city = '$cuidad'";
$resultado = mysqli_query ($conex, $consulta) ;
$registro = mysqli_num_rows ($resultado);


$consulta = "SELECT * FROM usuarios WHERE state = '$estado'";
$resultado = mysqli_query ($conex, $consulta) ;
$registro = mysqli_num_rows ($resultado);
