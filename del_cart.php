<?php
include "lib.inc.php";
$id_book=$_POST["id_book_cart"];
$sql_del_cart="DELETE FROM shopping_cart_item WHERE shopping_cart_item.book_id=".$id_book;
mysqli_query($con,$sql_del_cart);
header("Location:Cart.php");
/*
 * cancello la row la cui book_id ha questo $id_book
 */