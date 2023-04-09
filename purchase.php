<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'bancodetiempo');

  $current_user = $_SESSION['current_user'];
  $item_id = utf8_decode($_POST['item_id']);
  
  // He hecho una modificación despues de grabar el video para que funcionase.

  $price_post="SELECT * FROM services WHERE id_service = '".$item_id."'";
  $result_price=mysqli_query($db,$price_post);
  $row=$result_price->fetch_assoc();
  $price_service = $row['price'];
  $balance = $_SESSION['balance'];
  
  if($price_service> 0){
    $balance="UPDATE users SET balance = balance + '".$price_service."' WHERE username ='".$current_user."'";
    $result=mysqli_query($db,$balance);

    $borrar_servicio = "DELETE FROM services WHERE id_service = '".$item_id."'";
    $result2=mysqli_query($db, $borrar_servicio);

    header('location: pagina_principal.php');

  }else{
    die("Connection failed: " . mysqli_connect_error());
  }

?>
