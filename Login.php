<?php
include "lib.inc.php";
$smarty = includesmarty();


if (empty($_SESSION["user"])) {
    $smarty->display("login.tpl");
} else {
    $email = ($_SESSION["user"]);
    $sql = "SELECT * FROM user WHERE email='$email' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $role = $row['role_id'];
   switch ($role){
       case 2:
           header("Location:profile.php");
           break;
       case 1:
           header("Location:Dashboard.php");
           break;
   }
}



