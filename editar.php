<?php
extract($_POST);

if (isset ($_POST["register"]) 
header("Location: ../");
exit();
)
require_once '../../lib/conexion.php';

$query = "UPDATE usuarios SET name = '$nombre', email = '$correo', password = '$pass', 
phone = '$telefono', addres = '$direcion', city = '$cuidad', state = '$estado' WHERE id = $id";

mysqli_query ($conex, $query);

header("Location: ../")
?>