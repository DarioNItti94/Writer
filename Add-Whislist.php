<?php
include "lib.inc.php";

$smarty = includesmarty();
if (!isset($_SESSION['user'])) {
    $msg = "Non sei registrato, registrati! Ci sono a disposizione tanti libri per te!";
    echo $msg;
} else {
    //prendo l'id dell'utente
    $id_logged = $_SESSION["id"];
    $book_id = $_POST['id_book'];
// inserisco l'id dell'utente loggato e l'id del libro
    $customer_wish="INSERT INTO customer_wishlist(`customer_id`, `book_id`) VALUES ($id_logged,$book_id)";
    $con->query($customer_wish);
    header("Location:Product-item.php?id=".$book_id);
}