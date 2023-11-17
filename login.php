<?php
require_once "conexion.php";

 $correo = $_POST ["email"];
 $password = $_POST ["password"];
 
 if(!isset($correo) || empty($correo)){
echo "Debes rellenar el campo Correo";
 }
 
 if(!isset($password) || empty($password)){
    echo "Debes rellenar el campo Contraseña";
     }

 $consulta = "select * from usuarios where email = '$correo' and password = '$password'";
 $resultado = mysqli_query ($conex, $consulta);
$registros = mysqli_num_rows ($resultado);

if ($registros > 0){
echo "bienvenido ". $correo;
} else {
   echo "usuario incorrecto";
}
$_SESSION["newsession"]=$value;


?>