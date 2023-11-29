<?php
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}


$id_a_eliminar = $_POST['id'];


$sql = "DELETE FROM usuarios WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    echo "Dato con ID $id eliminado correctamente.";
} else {
    echo "Error al eliminar el dato: " . $conexion->error;
}

$conexion->close();
?>