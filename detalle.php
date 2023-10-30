<?php 
require_once '../lib/conexion.php';
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Detalle</title>
</head>
<body  class= "d-flex justify-content-center vh-100 align-items-center">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">miguel ivan</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">miguel@gmail.com</h6>
    <p class="card-text">123123</p>
    <p class="card-text">Direccion</p>
    <a href="index.php" class="card-link">Regresar</a>
  </div>
</div>
</body>
</html>