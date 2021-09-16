<?php

include "lib.inc.php";
$smarty=includesmarty();
$msg = $_GET["msg"];
$smarty->assign("error",$msg);

$smarty->display("404.tpl");


