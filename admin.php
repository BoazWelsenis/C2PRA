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
        
        <div class="fontsize-18">
            <h2>Songteksten</h2>
            <a class="admin-link" href="add-songtekst.php">Songtekst Toevoegen ></a>
            <br>
            <a class="admin-link" href="edit-songtekst.php">Songtekst Bewerken ></a>
        </div>

        <div class="mt-2rem fontsize-18">
            <h2>Boeken</h2>
            <a class="admin-link" href="add-book.php">Boek Toevoegen > </a>
            <br>
            <a class="admin-link" href="edit-book.php">Boek Bewerken > </a>   
        </div>

        <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM songteksten";
        $statement = $conn->prepare($query);
        $statement->execute();
        $songteksten = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>Titel</th>
                <th>Artiest</th>
                <th>Songtekst</th>
            </tr>
            <?php foreach($songteksten as $songtekst): ?>
                <tr>
                    <td><?php echo $songtekst['titel']; ?></td>
                    <td><?php echo $songtekst['artiest']; ?></td>
                    <td><?php echo $songtekst['songtekst']; ?></td>
                    <td><a href="edit-songtekst.php?id=<?php echo $songtekst['id']; ?>">aanpassen</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>