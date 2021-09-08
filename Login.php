<?php

include "lib.inc.php";
$smarty = includesmarty();
$admin = "admin@web.it";
if (!isset($_SESSION['user'])) {
    $smarty->display("login.tpl");
    exit;
} elseif ($_SESSION['user'] == $admin){
header("Location:Upload-product.php");
} else {
    header("Location:profile.php");
}












