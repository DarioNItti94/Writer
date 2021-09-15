<?php
include "lib.inc.php";
$email = $_POST['newsletter'];

$sql="INSERT INTO newsletter (`email`) VALUES('$email') ";
$con->query($sql);
header('location:index.php');

