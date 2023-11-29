<?php 
require_once '../lib/conexion.php';
 $id = $_GET['id'];
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
    <nav class = "navbar navbar-expand-lg bg-body-tertiary">
    <ul class="navbar-nav">
<li class="nav-item">
    <a href="index.php" class="nav-link">Usuarios</a>
</li>
<li class="nav-item" >
    <a href="http://localhost/bases-de-datos/Estados/index2.php#" class="nav-link">Estado</a>
</li>
</ul>
</nav>
  <div class="card-body">
    <?php 
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result = mysqli_query($conex, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <h5 class="card-title"><?php echo $row['state']?></h5>
    <a href="index2.php" class="card-link">Regresar</a>
  </div>
</div>
</body>
</html>