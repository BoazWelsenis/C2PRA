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

        $auteur = $_POST['auteur'];
        if(empty($auteur))
        {
            $errors[] = "Vul een auteur in!";
        }

        $bladzijdes = $_POST['bladzijdes'];
        if(empty($bladzijdes))
        {
            $errors[] = "Vul een titel in!";
        }

        $beschrijving = $_POST['beschrijving'];
        if(empty($beschrijving))
        {
            $errors[] = "Vul een beschrijving in!";
        }

        $prijs = $_POST['prijs'];
        if(empty($prijs))
        {
            $errors[] = "Vul een prijs in!";
        }

        $buylink = $_POST['buylink'];
        if(empty($buylink))
        {
            $errors[] = "Vul een link in waar de gebruiker een boek kan kopen in!";
        }

        if(isset($errors))
        {
            var_dump($errors);
            die();
        }
    
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
    }

    if($action == 'edit')
    {
        $id = $_POST['id'];

        $titel = $_POST['titel'];
        if(empty($titel))
        {
            $errors[] = "Vul een titel in!";
        }

        $auteur = $_POST['auteur'];
        if(empty($auteur))
        {
            $errors[] = "Vul een auteur in!";
        }

        $bladzijdes = $_POST['bladzijdes'];
        if(empty($bladzijdes))
        {
            $errors[] = "Vul een titel in!";
        }

        $beschrijving = $_POST['beschrijving'];
        if(empty($beschrijving))
        {
            $errors[] = "Vul een beschrijving in!";
        }

        $prijs = $_POST['prijs'];
        if(empty($prijs))
        {
            $errors[] = "Vul een prijs in!";
        }

        $buylink = $_POST['buylink'];
        if(empty($buylink))
        {
            $errors[] = "Vul een link in waar de gebruiker een boek kan kopen in!";
        }

        if(isset($errors))
        {
            var_dump($errors);
            die();
        }

        require_once 'conn.php';
        $query = "UPDATE boeken SET titel = :titel, auteur = :auteur, bladzijdes = :bladzijdes, beschrijving = :beschrijving, prijs = :prijs, buylink = :buylink WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":titel" => $titel,
            ":auteur" => $auteur,
            ":bladzijdes" => $bladzijdes,
            ":beschrijving" => $beschrijving,
            ":prijs" => $prijs,
            ":buylink" => $buylink,
            ":id" => $id
        ]);
    
        header("Location: ../books/boeken.php");
        exit;
    }
?>