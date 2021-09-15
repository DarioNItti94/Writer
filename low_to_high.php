<?php
include "lib.inc.php";

$smarty = includesmarty();
$sql="SELECT * FROM book ORDER BY book.price ASC";
$result = mysqli_query($con, $sql);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
    $smarty->assign("books", $books);

}



$cat="SELECT * FROM `category`";
$res=mysqli_query($con, $cat);
$category=array();
while ($category = mysqli_fetch_array($res)) {
    $categories[] = $category;
    $smarty->assign("categories",$categories);
}


$smarty->display("low_to_high.tpl");