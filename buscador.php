<?php

session_start();

$query = $_GET['search'];

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bancodetiempo";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$query = mysqli_real_escape_string($conn, $query);

$sql = "SELECT * FROM services WHERE name LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  echo '<h1>Resultados de la búsqueda:</h1>';
  while ($row = mysqli_fetch_array($result)) {

    echo '<head>';
    echo '<link rel="stylesheet" href="estilo_buscador.css">';
    echo '</head>';
    echo '<table align="center" class="card-table">';
    echo '<tr>';
    echo '<td class="card"';
    echo '<h2>' . $row['name'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo '<span>' . 'Precio: ' . $row['price'] . ' Minutos.' . '</span>';
    echo '<form action="purchase.php" method="POST">';
    echo '<input type="hidden" name="item_id" value="' . $row['id_service'] . '">';
    echo '<button type="submit" class="purchase-button">Comprar</button>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
  }
  echo '<br><center><a href="Pagina_Principal.php">Volver a la página principal.</a></center>';
} else {
  echo 'No hay resultados para mostrar.';
}
