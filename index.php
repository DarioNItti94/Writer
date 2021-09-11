<?php
include "lib.inc.php";
$smarty = includesmarty();
$book_list = "SELECT * FROM book";
$result = mysqli_query($con,$book_list);
$num = mysqli_num_rows($result);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
    $smarty->assign("books", $books);
}

$log = "SELECT * FROM user WHERE role_id=2";
$result = mysqli_query($con, $log);
$user = mysqli_num_rows($result);



$smarty->assign("read", $num);
$smarty->assign("user",$user);

$smarty->display("index.tpl");



