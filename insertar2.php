<?php
extract($_POST);

if (!isset ($_POST["register"])){
    header ("Location: ../");
    exit();
} 

require_once '../../lib/conexion.php';

$query = "INSERT INTO usuarios (state) VALUES 
('$estado')";

mysqli_query($conex, $query);

header("Location: ../index2.php");
?>