<?php
include "lib.inc.php";
$isbn = $_POST['isbn'];
$title = $_POST['titolo'];
$edizione = $_POST['edizione'];
$pubb = $_POST['pubblicazione'];
$editore = $_POST['editore'];
$quant = $_POST['quantita'];
$price = floatval($_POST['prezzo']);
$cat = $_POST['categoria'];
$author = $_POST['autore'];
//divido il nome e il cognome dell'autore
list($name, $surname) = (explode(" ", $author));
$title=mysqli_real_escape_string($con,$title);
// prendo i valori di input e li metto in variabili

$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

//prendo i valori del file di immagine del prodotto (i suoi metadati)
$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
$img_uplad_path = 'templates/img/' . $new_img_name;
move_uploaded_file($tmp_name, $img_uplad_path);


/*
 *
 *
 * Eseguo le query sul database
 *
 *
 */


$sql = "SELECT * FROM book WHERE isbn=$isbn";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if ($num == 1) {
    // controllo se ci sono elementi con lo stesso ISBN
    header('location:Error.php');
} else {
    $author = "INSERT INTO author(first_name, last_name) VALUES ('$name','$surname')";
    $con->query($author);
    //prendo l'id dell'autore inserito
    $last_id_author = $con->insert_id;
    $publisher = "INSERT INTO publisher(name) VALUES ('$editore')";
    if ($con->query($publisher) === TRUE) {
        //prendo l'id dell'editore inserito
        $last_id_publisher = $con->insert_id;
        $book = "INSERT INTO book(isbn, title, edition, pub_date, quantity, price, publisher_id, pic) VALUES
    ('$isbn', '$title', '$edizione', '$pubb', $quant, $price, $last_id_publisher, '$img_uplad_path')";
        $con->query($book);
        //prendo l'id del libro inserito
        $last_id_book = $con->insert_id;

        /*
         * ora riempio le tabelle book_author e book_category
         */
        $book_category="INSERT INTO book_category(category_id, book_id) VALUES ( $cat,$last_id_book)";
        $book_author="INSERT INTO book_author(author_id, book_id) VALUES ($last_id_author,$last_id_book)";
        $con->query($book_author);
        $con->query($book_category);
        header('location:Upload-product.php');

    } else {
        header('location:Error.php');

    }

}






