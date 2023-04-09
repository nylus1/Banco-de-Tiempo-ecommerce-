<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bancodetiempo";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$name = utf8_decode($_POST['name']);
$description = utf8_decode($_POST['description']);
$price_post = utf8_decode($_POST['product_cost']);


$current_user = $_SESSION['current_user'];

$query = $conn->query("SELECT * FROM users WHERE username = '".$current_user."'");
$row = $query->fetch_assoc();

$balance = $row['balance'];


if($balance<$price_post){
  die ("Error: No hay suficiente balance");
}else{

$sql = "INSERT INTO services (name, description, price, user_name) VALUES ('".$name."', '".$description."', '".$price_post."', '".$current_user."')";
mysqli_query($conn, $sql);

$new_balance = $balance - $price_post;

$query = "UPDATE users SET balance = '".$new_balance."' WHERE username = '".$current_user."'";
mysqli_query($conn, $query);

header('Location: Pagina_Principal.php');

}
