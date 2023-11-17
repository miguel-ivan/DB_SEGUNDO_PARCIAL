<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    
    // Eliminar datos de la tabla
    $sql = "DELETE FROM usuarios WHERE Nombre = '$nombre'";
    $conn->query($sql);

    // Redirigir a la página principal
    header("Location: index.php");
}

$conn->close();
?>
<!-- Aquí debes poner tu formulario para eliminar datos -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body class= "d-flex justify-content-center vh-100 align-items-center">

<nav class = "navbar navbar-expand-lg bg-body-tertiary">
    <ul class="navbar-nav">
<li class="nav-item">
    <a href="index.php" class="nav-link">Usuarios</a>
</li>
<li class="nav-item" >
    <a href="http://localhost/bases-de-datos/Estados/index2.php#" class="nav-link">Estado</a>
</li>

    <form action="accions/insertar.php" method="POST">
    <h1  class="text-primary">AÑADIR</h1>
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre"  class="form-control">
        </div>
        <div class="foro-group">
            <label for="email">Correo</label>
            <input type="email" id= "email" name="correo" class="form-control">
        </div>
        <div class="foro-group">
            <label for="password">Password</label>
            <input type="password" id= "pass" name="pass" class="form-control">
        </div>
        <div class="foro-group">
            <label for="phone">Telefono</label>
            <input type="tel" id= "phone" name="telefono" class="form-control">
        </div>
        <div class="foro-group">
            <label for="addres">Dirección</label>
            <input type="text" id= "addres" name="dirrecion" class="form-control">
        </div>
        <div class="foro-group">
            <label for="cuidad">Cuidad</label>
            <input type="text" id= "cuidad" name="cuidad" class="form-control">
        </div>
        <div class="foro-group">
            <label for="estado">Estado</label>
            <input type="text" id= "estado" name="estado" class="form-control">
        </div>
        <div class= "foro-group" >
            <input type="submit" name="register" value="Enviar" class= "btn btn-primary">
        </div>
        
    </form>

</body>
</html>