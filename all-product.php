<?php
include "lib.inc.php";
$smarty=includesmarty();
$book_list = "SELECT * FROM `book` INNER JOIN book_author ON book_author.book_id=book.id INNER JOIN author ON book_author.author_id=author.id";
$result = mysqli_query($con,$book_list);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
    $smarty->assign("books", $books);
}

$smarty->display("sezione-libri.tpl");