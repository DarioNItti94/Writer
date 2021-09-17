<?php
include "lib.inc.php";

$id_book = $_POST["bookId"];
$isbn = $_POST["book-isbn"];
$titolo = $_POST["book-title"];
$edizione = $_POST["book-edition"];
$date = $_POST["book-date"];
$pub = $_POST["book-pub"];
$qt = $_POST["book-qt"];
$price = $_POST["book-price"];
$category = $_POST["category"];
$auth = $_POST["book-auth"];
list($name, $surname) = (explode(" ", $auth));
$title = mysqli_real_escape_string($con, $titolo);
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

$sql = "SELECT * FROM book WHERE isbn=$isbn";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if ($num == 1) {
    // controllo se ci sono elementi con lo stesso ISBN
    $error = "Questo ISBN esiste già, ritorna alla sezione dei libri";
    header("Location:Error.php?msg=" . $error);
} else {
    /*
     * update autore
     */
    $id_auth = "SELECT * FROM `book_author` WHERE book_author.book_id=" . $id_book;
    $res_id = mysqli_query($con, $id_auth);
    $resrow = mysqli_fetch_object($res_id);
    $id_autore = $resrow->author_id;
    $author_upd = "UPDATE `author` SET `first_name`='$name',`last_name`='$surname' WHERE author.id=" . $id_autore;
    $update_autore = mysqli_query($con, $author_upd);

    /*
     * update editore
     */
    $check_sql="SELECT * FROM `publisher` WHERE publisher.name='$pub'";
    $check_pub = mysqli_query($con, $check_sql);
    $num_pub=mysqli_fetch_row($check_pub);
    if($num==1){
        $publisher = "INSERT INTO publisher(`name`) VALUES ('$pub')";
        $con->query($publisher);
        $last_id_publisher = $con->insert_id;
        $update_check_book = "UPDATE book SET isbn ='$isbn',title='$title',edition='$edizione' 
                ,pub_date='$date',quantity=$qt,price=$price,publisher_id=$last_id_publisher,pic='$img_uplad_path'
WHERE book.id=" . $id_book;
        $con->query($update_check_book);
    }else{

    $id_pub = "SELECT * FROM `publisher` WHERE publisher.name='$pub'";
    $res_pub = mysqli_query($con, $id_pub);
    $row_pub = mysqli_fetch_object($res_pub);
    $id_publisher = $resrow->publisher_id;
    $update_pub = "UPDATE `publisher` SET `name`='$pub' WHERE publisher.id=". $id_publisher;
    }
    /*
     * update libro
     */
    $update_book = "UPDATE book SET isbn ='$isbn',title='$title',edition='$edizione'
                ,pub_date='$date',quantity=$qt,price=$price,pic='$img_uplad_path'
WHERE book.id=" . $id_book;
    $res_book = mysqli_query($con, $update_book);
    /*
     *update categoria
     */
    $id_cat = "UPDATE `book_category` SET `category_id`=$category,`book_id`=$id_book WHERE book_category.book_id=".$id_book;
    $res_cat = mysqli_query($con, $id_cat);
    header("Location:All-product.php");


}