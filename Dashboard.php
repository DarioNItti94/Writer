<?php
include "lib.inc.php";
$smarty = includesmarty();

$id_logged = $_SESSION["user"];
$sql = "SELECT * FROM user WHERE email='$id_logged'";
$res_admin = mysqli_query($con, $sql);
$admin = mysqli_fetch_array($res_admin);

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
 * numero recensioni
 */
$review_list = "SELECT * FROM book_review";
$result = mysqli_query($con,$review_list);
$review = mysqli_num_rows($result);

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

$newsletter="SELECT * FROM `book_review` INNER JOIN user ON book_review.customer_id=user.id INNER JOIN book ON book_review.book_id=book.id";
$news_res=mysqli_query($con, $newsletter);
$news=array();
while ($news = mysqli_fetch_array($news_res)) {
    $newses[]=$news;
    $smarty->assign("reviews",$newses);
}
$smarty->assign("admin", $admin);

$smarty->assign("read", $num);
$smarty->assign("user",$user);
$smarty->assign("order_num",$order_num);
$smarty->assign("review",$review);


$smarty->display("admin-dash.tpl");

