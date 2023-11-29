<?php
include("conexion.php");
if (!empty($_POST["btningresar"])) {
   if (empty($_POST["email"]) and empty($_POST ["password"])) {
      echo "LOS CAMPOS ESTAN VACIOS";
   } else {
      $email=$_POST["email"];
      $password=$_POST["password"];
      $sql=$conex->query("SELECT * FROM usuarios WHERE email='$email' and password='$password'");
      if ($datos=$sql->fetch_object()) {
         header("Location:../Usuarios/index.php");
      } else {
         echo "ACCESO DENEGADO";
      }
      
   }
   
}
?> 