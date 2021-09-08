<?php
include "lib.inc.php";
$smarty=includesmarty();
$book_list = "SELECT * FROM book";
$result = mysqli_query($con,$book_list);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
    $smarty->assign("books", $books);
}

$smarty->display("All-Product.tpl");