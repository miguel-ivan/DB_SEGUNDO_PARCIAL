<?php
if (!isset ($_POST["register"])){
    header ("Location: ../");
} 

$id=$_GET['id'];

require_once '../../lib/conexion.php';

$query = "DELETE FROM usuarios WHERE id=$id";

mysqli_query($conex, $query);

header("Location: ../index2.php");
?>