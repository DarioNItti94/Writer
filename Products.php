<?php
include "lib.inc.php";

$smarty = includesmarty();
$category_id = $_GET["id_category"];
$smarty->assign("categoria", 'Avventura');
$avventura = "SELECT  book.id,book.title,book.price,category.name ,book.pic FROM book INNER JOIN book_category ON book.id=book_category.book_id INNER JOIN category ON category.id=book_category.category_id WHERE book_category.category_id=".$category_id;
$result = mysqli_query($con, $avventura);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
    $smarty->assign("books", $books);

}



$smarty->display("Products.tpl");