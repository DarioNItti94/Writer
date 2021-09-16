<?php
include "lib.inc.php";
$smarty = includesmarty();
$id = $_GET["id"];

/*
 * prendo i dati del libro selezionato
 */
$book = "SELECT * FROM book WHERE id=" . $id;
$result_book = mysqli_query($con, $book);
$book_item = mysqli_fetch_array($result_book);
/*
 * prendo i dati dell'autore del libro selezionato

 */
$auth = "SELECT * FROM author INNER JOIN book_author ON book_author.author_id = author.id WHERE book_author.book_id=" . $id;
$result_auth = mysqli_query($con, $auth);
$author = mysqli_fetch_array($result_auth);

/*
 * prendo i dati dell'autore del libro selezionato

 */

$cat = "SELECT * FROM category INNER JOIN book_category ON book_id=" . $id;
$result_category = mysqli_query($con, $cat);
$category = mysqli_fetch_array($result_category);


$rev = "SELECT * FROM book_review INNER JOIN user ON user.id=book_review.customer_id WHERE book_review.book_id=".$id;
$res_review = mysqli_query($con, $rev);
$row = array();
while ($row = mysqli_fetch_array($res_review)) {
    $reviews[] = $row;
    $smarty->assign("reviews", $reviews);

}


$smarty->assign("book", $book_item);
$smarty->assign("author", $author);
$smarty->assign("category", $category);
$smarty->display("Product-item.tpl");




