<?php
include "lib.inc.php";

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email-sign'];
$pwd = $_POST['password-sign'];

$hashed_pwd = hash('sha256',$pwd);

$sign = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($con, $sign);
$row = mysqli_fetch_array($result);
$num =mysqli_num_rows($result);
$role=$row['role_id'];
if ($num == 1 AND $role==2) {
    $error="Username già presente, prova con un'altra E-mail!!";
    header("Location:Error.php?msg=" . $error);
} else {
    $reg = "INSERT INTO user (email,hashed_pwd,first_name,last_name,role_id) VALUES ('$email', '$hashed_pwd','$nome','$cognome',2)";
    mysqli_query($con, $reg);
    $id_utente = $con->insert_id;
    $cart_user = "INSERT INTO shopping_cart(customer_id) VALUES ($id_utente)";
    $con->query($cart_user);
    header('location:Login.php');

}



