<?php
include "lib.inc.php";
$smarty = includesmarty();

$messaggi="SELECT * FROM `messaggi`";
$msg_res=mysqli_query($con, $messaggi);
$msg=array();
while ($msg = mysqli_fetch_array($msg_res)) {
    $msgs[]=$msg;
    $smarty->assign("msgs",$msgs);
}


$newsletter="SELECT * FROM `newsletter`";
$news_res=mysqli_query($con, $newsletter);
$news=array();
while ($news = mysqli_fetch_array($news_res)) {
    $newses[]=$news;
    $smarty->assign("newses",$newses);
}
$smarty->display("admin-user.tpl");
