<?php
include "lib.inc.php";
$id_prod = $_POST["id_book"];
$id_logged = $_SESSION["id"];
$titolo_rec=$_POST["titolo-rec"];
$descr=$_POST["testo-rec"];
$rating=intval($_POST["number-rec"]);

$sql_review="INSERT INTO book_review(title, body, rating, customer_id, book_id) VALUES
 ('$titolo_rec','$descr',$rating,$id_logged,$id_prod)";
$res= mysqli_query($con, $sql_review);

header("Location:Product-item.php?id=". $id_prod);
