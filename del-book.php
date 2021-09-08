<?php
include "lib.inc.php";

$id_book=$_POST["book"];
$id_author=$_POST["author"];
$id_pubblisher=$_POST["pub"];
$id_category=$_POST["category"];



$sql_author="DELETE FROM author WHERE id=".$id_author;
$con->query($sql_author);


$sql_book="DELETE FROM book WHERE id=".$id_book;
$con->query($sql_book);







header("Location:all-product.php");
