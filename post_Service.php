<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo_register.css" rel="stylesheet">
    <title>Subir Servicio</title>
</head>

<body>

    <form action="post-service.php" method="post">
        <label for="name">Nombre del servicio:</label><br>
        <input type="text" name="name" id="name" required><br>
        <label for="description">Descripción:</label><br>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea><br>
        <label for="price">Precio:</label><br>
        <input type="number" name="product_cost" id="price" required><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>