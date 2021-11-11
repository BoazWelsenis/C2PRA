<?php
    session_start();
    require_once 'config.php';

    if(!isset($_SESSION['user_id']))
    {
        header("Location: $base_url/login.php");
        exit;
    }

    $action = $_POST['action'];

    if($action == 'add')
    {
        $titel = $_POST['titel'];
        if(empty($titel))
        {
            $errors[] = "Vul een titel in!";
        }

        $artiest = $_POST['artiest'];
        if(empty($artiest))
        {
            $errors[] = "Vul een artiest in!";
        }

        $songtekst = $_POST['songtekst'];
        if(empty($songtekst))
        {
            $errors[] = "Vul een songtekst in!";
        }

        if(isset($errors))
        {
            var_dump($errors);
            die();
        }
    
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
    }

    if($action == 'edit')
    {
        $id = $_POST['id'];

        $titel = $_POST['titel'];
        if(empty($titel))
        {
            $errors[] = "Vul een titel in!";
        }

        $artiest = $_POST['artiest'];
        if(empty($artiest))
        {
            $errors[] = "Vul een artiest in!";
        }

        $songtekst = $_POST['songtekst'];
        if(empty($songtekst))
        {
            $errors[] = "Vul een songtekst in!";
        }

        if(isset($errors))
        {
            var_dump($errors);
            die();
        }

        require_once 'conn.php';
        $query = "UPDATE songteksten SET titel = :titel, artiest = :artiest, songtekst = :songtekst WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":titel" => $titel,
            ":artiest" => $artiest,
            ":songtekst" => $songtekst,
            ":id" => $id
        ]);
    
        header("Location: ../music/songteksten.php");
        exit;
    }
?>