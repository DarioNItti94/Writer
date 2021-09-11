<?php

include "lib.inc.php";
$smarty = includesmarty();
$admin = "admin@web.it";
if (!isset($_SESSION['user'])) {
    $smarty->display("login.tpl");
    exit;
} elseif ($_SESSION['user'] == $admin){
header("Location:Dashboard.php");
} else {
    header("Location:profile.php");
}












