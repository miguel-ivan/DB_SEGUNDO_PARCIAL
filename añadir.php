<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Añadir</title>

</head>
<body class= "d-flex justify-content-center vh-100 align-items-center">
    <form action="lib/login.php" method="POST">
    <h1  class="text-primary">AÑADIR</h1>
        <div>
            <label for="">Nombre</label>
            <input type="name" name="name" id="name"  class="form-control">
        </div>
        <div class="my-2">
            <label for="email">Correo</label>
            <input type="email" id= "email" name="email" class="form-control">
        </div>
        <div class="my-2">
            <label for="phone">Telefono</label>
            <input type="phone" id= "phone" name="phone" class="form-control">
        </div>
        <div class="my-2">
            <label for="addres">Dirección</label>
            <input type="addres" id= "addres" name="addres" class="form-control">
        </div>
        <div>
            <input type="submit" value="Añadir" class= "btn btn-primary">
        </div>
        
    </form>

</body>
</html>