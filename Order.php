<?php
include "lib.inc.php";
$smarty=includesmarty();
checkSessione();

$id_logged = $_SESSION["id"];
$sql_order="SELECT * FROM book INNER JOIN order_item ON book.id=order_item.book_id INNER JOIN `order` ON `order`.`customer_id`=".$id_logged;
$res= mysqli_query($con,$sql_order);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("orders",$data);
}
$smarty->display("Order.tpl");
