<?php
include "lib.inc.php";
$smarty = includesmarty();
/*
 * numero utenti
 */

$log = "SELECT * FROM user WHERE role_id=2";
$result = mysqli_query($con, $log);
$user = mysqli_num_rows($result);
/*
 * numero libri
 */
$book_list = "SELECT * FROM book";
$result = mysqli_query($con,$book_list);
$num = mysqli_num_rows($result);


/*
 * ultimi ordini
 */
$last_order="SELECT * FROM `order` WHERE `order`.`submission_date` >= DATE(NOW()) - INTERVAL 0 DAY AND `order`.`status`='Preso in carico'";
$res=mysqli_query($con,$last_order);
$order_num=mysqli_num_rows($res);


/*
 * ordini da spedire
 */
$sql_admin_orders="SELECT `order`.`id`,`order`.`submission_date`,`order`.`status`,user.email FROM `order` INNER JOIN user ON `order`.`customer_id`=user.id";
$res= mysqli_query($con,$sql_admin_orders);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("orders",$data);
}

/*
 * assign to smarty
 */

$smarty->assign("read", $num);
$smarty->assign("user",$user);
$smarty->assign("order_num",$order_num);


$smarty->display("admin-dash.tpl");

