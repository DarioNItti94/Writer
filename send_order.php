<?php
include "lib.inc.php";

$sql_update_shipped="UPDATE `order` SET `status`='Spedito'";
$res=mysqli_query($con,$sql_update_shipped);

$email = $_POST['email'];
$id = $_POST['id'];
$body =  "Il tuo ordine No. $id  e' stato spedito";

$subject = "Il tuo ordine di Book's Corner";
$headers = "Book's Corner";

if (mail($email, $subject, $body, $headers)) {
    header("Location:admin-orders.php");
} else {
    header("Location:Error.php");

}
