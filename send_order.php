<?php
include "lib.inc.php";
$id = $_GET["id"];
$sql_email = "SELECT user.email FROM `order` INNER JOIN user ON `order`.`customer_id`=user.id WHERE `order`.`id`=" . $id;
$res_mail = mysqli_query($con, $sql_email);
$array = mysqli_fetch_array($res_mail);
$email=$array['email'];

$control_shipped = "SELECT * FROM `order` WHERE `order`.`status`='Spedito' AND `order`.`id`=" . $id;
$result = mysqli_query($con, $control_shipped);
$row_control = mysqli_num_rows($result);
if ($row_control == 1) {
    header("Location:Dashboard.php");
} else {
    $sql_update_shipped = "UPDATE `order` SET `status`='Spedito' WHERE id=" . $id;
    $res = mysqli_query($con, $sql_update_shipped);


    $body = "Il tuo ordine No. $id  e' stato spedito";

    $subject = "Il tuo ordine di Book's Corner";
    $headers = "Book's Corner";

    if (mail($email, $subject, $body, $headers)) {
        header("Location:Dashboard.php");
    } else {
        header("Location:Error.php");

    }
}