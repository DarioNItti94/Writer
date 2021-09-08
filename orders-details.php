<?php
include "lib.inc.php";
$smarty=includesmarty();
$id = $_GET["id"];
$sql_details="SELECT * FROM book INNER JOIN order_item ON book.id=order_item.book_id WHERE order_item.order_id=".$id;
$res=mysqli_query($con,$sql_details);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("books",$data);
}
$smarty->display("orders-det.tpl");