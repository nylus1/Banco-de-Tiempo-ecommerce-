<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bancodetiempo";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to Database: " . mysqli_connect_error();
}

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$surname = mysqli_real_escape_string($conn, $_REQUEST['surname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$balance = mysqli_real_escape_string($conn, $_REQUEST['balance']);

$sql = "INSERT INTO users (name, surname, email, username, password, balance) VALUES ('$name', '$surname', '$email', '$username', '$password', '$balance')";
if(mysqli_query($conn, $sql)){
    echo "Usuario registrado con éxito.";
    header('Location: index.html');

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($conn);
?>