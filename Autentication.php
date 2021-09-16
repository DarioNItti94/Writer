<?php
include "lib.inc.php";
$smarty = includeSmarty();


$email = $_POST['email-log'];
$pwd = $_POST['password-log'];
$pwd = hash('sha256', $pwd);

$email = mysqli_real_escape_string($con, $email);
$pwd = mysqli_real_escape_string($con, $pwd);
$log = "SELECT * FROM user WHERE email='$email' AND hashed_pwd='$pwd'";
$result = mysqli_query($con, $log);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
$user_id=$row['id'];
$name_user=$row['first_name'];
$role=$row['role_id'];




if ($num == 1 AND $role==2) {

    $_SESSION['id'] = $row["id"];
    $_SESSION['user'] = $email;
    $_SESSION['customer_id']=$user_id;
    $_SESSION['user_name']=$row["first_name"];
    $_SESSION['logged_in'] = true;
    header('location:Profile.php');
} else {
    $email = $_POST['email-log'];
    $pwd = $_POST['password-log'];
    $pwd = hash('sha256', $pwd);

    $email = mysqli_real_escape_string($con, $email);
    $pwd = mysqli_real_escape_string($con, $pwd);
    $log = "SELECT * FROM user WHERE email='$email' AND hashed_pwd='$pwd'";
    $result = mysqli_query($con, $log);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        session_start();
        $_SESSION['logged_in'] = true;
        session_regenerate_id();
        $_SESSION['id'] = session_id();
        $_SESSION['user'] = $email;
        header('location:Dashboard.php');
    } else {
       $error="Utente Username o Password sbagliata, Torna indietro";
        header("Location:Error.php?msg=" . $error);


    }

}