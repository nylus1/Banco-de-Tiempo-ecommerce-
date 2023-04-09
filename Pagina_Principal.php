<?php
session_start();
$username = $_SESSION['current_user'];
$balance = $_SESSION['balance'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo_pagina_principal.css" rel="stylesheet">
    <title>Pagina Principal</title>
</head>

<body>

    <form>
        <div>
            <p>Usuario conectado:
                <?php
                echo $username;
                ?>
            </p>
            <p>Tiempo disponible:
                <?php echo $balance, ' Minutos.' ?>
            </p>
            <a href="post_Service.php">¡Subir un nuevo servicio!</a>
        </div>
    </form>
<br>
    <form action="buscador.php" method="get">
        <input type="text" name="search" placeholder="Buscar...">
        <button type="submit">Enviar</button>
        <h3>Si quieres ver todos los servicios disponibles, haz click en Enviar sin poner nada.</h3>
    </form>
<br>
    <form>
        <?php

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bancodetiempo";

        $conn = new mysqli($hostname, $username, $password, $dbname);


        $sql = "SELECT * FROM services ORDER BY id_service DESC LIMIT 4";
        $result = mysqli_query($conn, $sql);

        echo '<center><h2>Ultimos servicios subidos.</h2></center>';

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<head>';
                echo '<link rel="stylesheet" href="estilo_pagina_principal.css">';
                echo '</head>';
                echo '<table align="center" class="card-table">';
                echo '<tr>';
                echo '<td class="card"';
                echo '<h1>' . $row['name'] . '</h1>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<span>' . 'Precio: ' . $row['price'] . ' Minutos.' . '</span>';
                echo '<hr>';
                echo '</td>';
                echo '</tr>';
                echo '</table>';
                echo '<br>';
            }
        }

        ?>

    </form>
<br>
    <form action="logout.php" method="post">
        <br>
        <input type="submit" value="Log Out">
    </form>


</body>

</html>