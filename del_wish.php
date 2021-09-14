<?php
include "lib.inc.php";
$id = $_GET["id"];
$sql="DELETE FROM `customer_wishlist` WHERE `customer_wishlist`.`book_id`=".$id;
$res=mysqli_query($con,$sql);
header("Location:profile.php");
