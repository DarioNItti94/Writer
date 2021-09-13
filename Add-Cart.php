<?php
include "lib.inc.php";
$smarty = includesmarty();
if (!isset($_SESSION['user'])) {
    header("Location:Login.php");
} else {
    //prendo l'id dell'utente
    $id_logged = $_SESSION["id"];
    $sql = "SELECT * FROM shopping_cart WHERE customer_id=" . $id_logged;
    $result = mysqli_query($con, $sql);
    $resrow = mysqli_fetch_object($result);
    $id_cart = $resrow->id;
//prendo l'id dello shopping cart dell'utente nella tabella shopping_cart

    $quant = $_POST['quantita'];
    $price = $_POST['price'];
    $book_id = $_POST['id_book'];
    //prendo i valori nascosti per riempiere il carrello dell'utente

    $sql_cart = "SELECT * FROM `shopping_cart_item` WHERE book_id=" . $book_id;
    $result = mysqli_query($con, $sql_cart);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
            $sql_quantity="UPDATE shopping_cart_item SET item_quantity=item_quantity + $quant WHERE book_id=$book_id";
            $con->query($sql_quantity);
    } else {
        $cart_item_user = "INSERT INTO shopping_cart_item(item_quantity, subtotal, shopping_cart_id, book_id) VALUES
                    ($quant,$price,$id_cart,$book_id)";
        $con->query($cart_item_user);
        $update_quant = "UPDATE book SET quantity=quantity - $quant WHERE id=$book_id";
        $con->query($update_quant);
    }
        //riempio il carrello dell'utente e diminuisco la quantità
        header("Location:Product-item.php?id=" . $book_id);

        exit;

}
