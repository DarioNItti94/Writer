<?php
include "lib.inc.php";

$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["message"];

$sql="INSERT INTO messaggi( nome, email, text) VALUES ('$name','$email','$msg')";
$con->query($sql);
header("Location:Contact.php");
