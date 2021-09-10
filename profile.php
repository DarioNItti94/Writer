<?php
include "lib.inc.php";
checkSessione();


$smarty = includesmarty();
$id_logged = $_SESSION["id"];
$sql = "SELECT first_name FROM user WHERE id=" . $id_logged;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$user=$row['first_name'];
/*
 * wishlist sections
 */

$book_sql = "SELECT * FROM book INNER JOIN customer_wishlist ON customer_wishlist.book_id=book.id WHERE customer_wishlist.customer_id=".$id_logged;
$result_book = mysqli_query($con, $book_sql);
if (!$result_book) {
    $smarty->assign("books", "");
} else {
    $res = array();
    while ($res = mysqli_fetch_array($result_book)) {
        $resrowbook[] = $res;
        $smarty->assign("books", $resrowbook);

    }
}
/*
 * addresses sections
 */
$sql="SELECT * FROM customer_address WHERE customer_id=".$id_logged;
$result = mysqli_query($con,$sql);
$address=array();
while ($address = mysqli_fetch_array($result)) {
    $addresses[] = $address;
    $smarty->assign("addresses",$addresses);

}
/*
 * orders sections
 */
$id_logged = $_SESSION["id"];
$sql_order="SELECT * FROM book INNER JOIN order_item ON book.id=order_item.book_id INNER JOIN `order` ON `order`.`customer_id`=".$id_logged;
$res= mysqli_query($con,$sql_order);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("orders",$data);
}

$smarty->assign("user", $user);
$smarty->display("my-account.tpl");
