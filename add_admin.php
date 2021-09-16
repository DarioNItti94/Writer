<?php
include "lib.inc.php";

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$hashed_pwd = hash('sha256',$pwd);

$sign = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($con, $sign);
$num =mysqli_num_rows($result);
if ($num == 1) {
    echo "username già presente";
} else {
    $reg = "INSERT INTO user (email,hashed_pwd,first_name,last_name,role_id) VALUES ('$email', '$hashed_pwd','$nome','$cognome',1)";
    mysqli_query($con, $reg);
    $id_utente = $con->insert_id;
    $cart_user = "INSERT INTO shopping_cart(customer_id) VALUES ($id_utente)";
    $con->query($cart_user);
    header('location:admin-user.php');

}

