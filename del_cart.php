<?php
include "lib.inc.php";
$id = $_GET["id"];
$sql_del_cart="DELETE FROM shopping_cart_item WHERE shopping_cart_item.id=".$id;
mysqli_query($con,$sql_del_cart);
header("Location:Cart.php");
/*
 * cancello la row la cui book_id ha questo $id_book
 */