<?php
include "lib.inc.php";
$smarty=includesmarty();

$sql_admin_orders="SELECT `order`.`id`,`order`.`submission_date`,`order`.`status`,customer.email FROM `order` INNER JOIN customer ON `order`.`customer_id`=customer.id";
$res= mysqli_query($con,$sql_admin_orders);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("orders",$data);
}
$smarty->display("admin-orders.tpl");