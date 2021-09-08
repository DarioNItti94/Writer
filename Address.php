<?php
include "lib.inc.php";
$smarty=includesmarty();
$id_logged = $_SESSION["id"];
$sql="SELECT * FROM customer_address WHERE customer_id=".$id_logged;
$result = mysqli_query($con,$sql);
$address=array();
while ($address = mysqli_fetch_array($result)) {
    $addresses[] = $address;
    $smarty->assign("addresses",$addresses);

}
$smarty->display("Address.tpl");