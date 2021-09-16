<?php
include "lib.inc.php";
$smarty = includesmarty();

$search = $_POST['search2'];
$sql="SELECT * FROM book WHERE book.title LIKE '%$search%'";
$res=mysqli_query($con,$sql);
$book=mysqli_fetch_array($res);
$smarty->assign("book",$book);

$cat="SELECT * FROM `category`";
$res=mysqli_query($con, $cat);
$category=array();
while ($category = mysqli_fetch_array($res)) {
    $categories[] = $category;
    $smarty->assign("categories",$categories);
}

$smarty->display("search-result.tpl");