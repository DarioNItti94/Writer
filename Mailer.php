<?php
include "lib.inc.php";
$smarty=includesmarty();
$to_email=$_POST["email"];
$name= $_POST['name'];
$body=$_POST['message'];

$subject = "Writer";
$headers = "Ciao $name";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location:admin-user.php");
} else {
    header("Location:Error.php");
    $smarty->assign("error","email non inviata");

}