<?php
include "lib.inc.php";
$smarty=includesmarty();
$book_list = "SELECT * FROM book WHERE id";
$id = $_GET["id"];
/*
 * prendo i dati del libro selezionato
 */
$book = "SELECT * FROM book WHERE id=".$id;
$result_book = mysqli_query($con, $book);
$book_item = mysqli_fetch_array($result_book);
/*
 * prendo i dati dell'autore del libro selezionato

 */
$auth = "SELECT * FROM author INNER JOIN book_author ON book_author.author_id = author.id WHERE book_author.book_id=".$id;
$result_auth = mysqli_query($con, $auth);
$author = mysqli_fetch_array($result_auth);

/*
 * prendo i dati dell'autore del libro selezionato

 */
/*
 * prendo l'editore del libro
 */
$pub = "SELECT * FROM publisher INNER JOIN book ON book.id=".$id;
$result_pub = mysqli_query($con, $pub);
$publisher = mysqli_fetch_array($result_pub);

$cat="SELECT * FROM category INNER JOIN book_category ON book_id=".$id;
$result_category=mysqli_query($con,$cat);
$category=mysqli_fetch_array($result_category);


$smarty->assign("pub",$publisher);
$smarty->assign("book", $book_item);
$smarty->assign("author", $author);
$smarty->assign("category",$category);

$smarty->display("modify.tpl");
