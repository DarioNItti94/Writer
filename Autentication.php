<?php
include "lib.inc.php";
$smarty = includeSmarty();
session_start();
session_regenerate_id(true);


$email = $_POST['email-log'];
$pwd = $_POST['password-log'];
$pwd = hash('sha256', $pwd);

$email = mysqli_real_escape_string($con, $email);
$pwd = mysqli_real_escape_string($con, $pwd);
$log = "SELECT id FROM customer WHERE email='$email' AND hashed_pwd='$pwd'";
$result = mysqli_query($con, $log);
$row = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
$user_id=$row['id'];
$name_user=$row['first_name'];



if ($num == 1) {
    $_SESSION['logged_in'] = true;
    $_SESSION['id'] = $row["id"];
    $_SESSION['user'] = $email;
    $_SESSION['customer_id']=$user_id;
    $_SESSION['user_name']=$row["first_name"];

    $smarty->assign("logged",true);
    header('location:Profile.php');
} else {
    $email = $_POST['email-log'];
    $pwd = $_POST['password-log'];
    $pwd = hash('sha256', $pwd);

    $email = mysqli_real_escape_string($con, $email);
    $pwd = mysqli_real_escape_string($con, $pwd);
    $log = "SELECT * FROM admin WHERE email='$email' AND hashed_pwd='$pwd'";
    $result = mysqli_query($con, $log);


    $num = mysqli_num_rows($result);
    if ($num == 1) {
        session_start();
        $_SESSION['logged_in'] = true;
        session_regenerate_id();
        $_SESSION['id'] = session_id();
        $_SESSION['user'] = $email;
        header('location:Upload-product.php');
    } else {
        $smarty->assign("logged", false);
        $smarty->display("Error.php");


    }

}