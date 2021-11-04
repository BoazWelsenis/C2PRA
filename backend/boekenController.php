<?php
    session_start();
    require_once 'config.php';

    if(!isset($_SESSION['user_id']))
    {
        header("Location: $base_url/login.php");
        exit;
    }

    $titel = $_POST['titel'];
    $auteur = $_POST['auteur'];
    $bladzijdes = $_POST['bladzijdes'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $buylink = $_POST['buylink'];

    //Query uitvoeren
    require_once 'conn.php';
    $query = "INSERT INTO boeken (titel, auteur, bladzijdes, beschrijving, prijs, buylink) VALUES(:titel, :auteur, :bladzijdes, :beschrijving, :prijs, :buylink)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":auteur" => $auteur,
        ":bladzijdes" => $bladzijdes,
        ":beschrijving" => $beschrijving,
        ":prijs" => $prijs,
        ":buylink" => $buylink
    ]);

    header("Location: $base_url/books/boeken.php");
    exit;
?>