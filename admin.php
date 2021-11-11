<?php session_start(); ?>

<?php
require_once 'backend/config.php';
if(!isset($_SESSION['user_id']))
{
	header("Location: $base_url/login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
    <link rel="icon" href="img/logo/logo-nobg.png">

</head>
<body>
    <?php include_once('header.php'); ?>
    <div class="wrapper">
        <h1 class="title-page">Admin</h1>
        
        <div class="fontsize-18 edit_add_icons">
            <h2>Songteksten</h2>
            <a class="admin-link" href="add-songtekst.php"><img src="img/plus.png" alt="toevoegen"></a>
        </div>
        <?php
            require_once 'backend/conn.php';
            $query = "SELECT * FROM songteksten";
            $statement = $conn->prepare($query);
            $statement->execute();
            $songteksten = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <br>
        <table id="tbi" class="fontsize-18">
            <tr>
                <th>Titel</th>
                <th>Artiest</th>
                <th>Songtekst</th>
                <th>Aanpassen</th>
            </tr>
            <?php foreach($songteksten as $songtekst): ?>
                <tr>
                    <td><?php echo $songtekst['titel']; ?></td>
                    <td><?php echo $songtekst['artiest']; ?></td>
                    <td><?php echo $songtekst['songtekst']; ?></td>
                    <td><a class="aanpas-link" href="edit-songtekst.php?id=<?php echo $songtekst['id']; ?>"><img src="img/pencil.png" alt="aanpassen"></a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="mt-2rem fontsize-18 edit_add_icons">
            <h2>Boeken</h2>
            <a class="admin-link" href="add-book.php"><img src="img/plus.png" alt="plus"></a>
        </div>

        <?php
            require_once 'backend/conn.php';
            $query = "SELECT * FROM boeken";
            $statement = $conn->prepare($query);
            $statement->execute();
            $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table id="tbi" class="fontsize-18">
            <tr>
                <th>Titel</th>
                <th>Auteur</th>
                <th>Beschrijving</th>
                <th>Prijs</th>
                <th>Aanpassen</th>
            </tr>
            <?php foreach($boeken as $boek): ?>
                <tr>
                    <td><?php echo $boek['titel']; ?></td>
                    <td><?php echo $boek['auteur']; ?></td>
                    <td><?php echo $boek['beschrijving']; ?></td>
                    <td><?php echo $boek['prijs']; ?></td>
                    <td><a class="admin-link" href="edit-book.php?id=<?php echo $boek['id']; ?>"><img src="img/pencil.png" alt="aanpassen" style=""></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>