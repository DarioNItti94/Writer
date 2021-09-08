<?php
include "lib.inc.php";
checkSessione();
$id_logged = $_SESSION["id"];

$sql_order = "INSERT INTO `order`(status, customer_id) VALUES ('Preso in carico',$id_logged)";
$con->query($sql_order);


$sql_item = "INSERT INTO order_item(quantity, subtotal, order_id, book_id)
SELECT shopping_cart_item.item_quantity,shopping_cart_item.subtotal,`order`.`id`,shopping_cart_item.book_id
FROM shopping_cart_item INNER JOIN `order` ON `order`.`customer_id`=" . $id_logged;
$con->query($sql_item);


$sql_shopping_cart_id = "SELECT id FROM shopping_cart WHERE customer_id=" . $id_logged;
$res = mysqli_query($con, $sql_shopping_cart_id);
$row = mysqli_fetch_object($res);
$id_cart = intval($row->id);


$del_cart = "DELETE FROM shopping_cart_item WHERE shopping_cart_id=" . $id_cart;
$con->query($del_cart);

$sql_email = "SELECT email FROM customer WHERE customer.id=" . $id_logged;
$email_res = mysqli_query($con, $sql_email);
$row = mysqli_fetch_object($email_res);
$email = $row->email;

$name = $_POST['name'];
$body =  "Il tuo ordine e' stato preso in carico";

$subject = "Il tuo ordine di Book's Corner";
$headers = "Book's Corner";

if (mail($email, $subject, $body, $headers)) {
    header("Location:Success.php");
} else {
    header("Location:Error.php");

}


