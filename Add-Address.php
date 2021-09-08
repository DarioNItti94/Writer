<?php
include "lib.inc.php";
$id_logged = $_SESSION["id"];

$nome = $_POST["name"];
$utente = $_POST["utente"];
$info = $_POST["info"];
$via = $_POST["via"];
$citta = $_POST["citta"];
$prov = $_POST["provincia"];
$cap = $_POST["cap"];
$stato = $_POST["stato"];


$via= mysqli_real_escape_string($con,$via);
$citta= mysqli_real_escape_string($con,$citta);


$sql="INSERT INTO customer_address(name, recipient, optional_info, street, town, province, postcode, state, customer_id) VALUES 
    ('$nome','$utente','$info','$via','$citta','$prov','$cap','$stato',$id_logged)";
$con->query($sql);
 header("Location:Address.php");