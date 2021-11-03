<?php
    session_start();
    require_once 'config.php';

    if(!isset($_SESSION['user_id']))
    {
        header("Location: $base_url/login.php");
        exit;
    }

    $titel = $_POST['titel'];
    $artiest = $_POST['artiest'];
    $songtekst = $_POST['songtekst'];

    require_once 'conn.php';
    $query = "INSERT INTO songteksten (titel, artiest, songtekst) VALUES(:titel, :artiest, :songtekst)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":artiest" => $artiest,
        ":songtekst" => $songtekst
    ]);

    header("Location: $base_url/music/songteksten.php");
    exit;
?>