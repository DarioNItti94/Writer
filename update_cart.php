<?php
include "lib.inc.php";
$item_quantity=$_POST["quantity_item"];
$id_book=$_POST["id_book_cart"];

$sql_quantity="UPDATE shopping_cart_item SET item_quantity=$item_quantity WHERE shopping_cart_item.book_id=".$id_book;
mysqli_query($con,$sql_quantity);

header("Location:Cart.php");

