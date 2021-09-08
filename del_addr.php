<?php
include "lib.inc.php";

$id_addr=$_POST["id_addr"];
$sql="DELETE FROM customer_address WHERE customer_address.id=".$id_addr;
$con->query($sql);
header("Location:Address.php");
