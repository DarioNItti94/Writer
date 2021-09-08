<?php
include "lib.inc.php";
$smarty=includesmarty();
$to_email = "dario.nitti@outlook.it";
$name= $_POST['name'];
$body=$_POST['message'];

$subject = "Contatti dal sito: $name";
$headers = "Book's Corner";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location:Contact.php");
} else {
    header("Location:Error.php");
    $smarty->assign("error","email non inviata");

}