<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bancodetiempo";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user = utf8_decode($_POST['username']);
$pass = utf8_decode($_POST['password']);

$sql = "SELECT * FROM users WHERE username = '" . $user . "' AND password = '" . $pass . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  session_start();

  $row = $result->fetch_assoc();

  $username = $row['username'];
  $balance = $row['balance'];
  $usuario_id = $row['usuario_id'];
  $price_service = $row['price'];

  $_SESSION['logged_in'] = true;
  $_SESSION['current_user'] = $username;
  $_SESSION['balance'] = $balance;
  $_SESSION['usuario_id'] = $usuario_id;
  $_SESSION['price_service'] = $price_service;

  echo 'You succesfully logged in';
  header('Location: Pagina_Principal.php');
} else {

  echo 'Invalid username or password';
  header('Location: index_fail.html');
}
?>