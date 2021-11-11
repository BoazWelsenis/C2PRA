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
    <title>Songtekst bewerken</title>
    <link rel="icon" href="img/logo/logo-nobg.png">
</head>
<body>
    <?php include_once('header.php') ?>
    
    <div class="form-style">
        <h2>Songtekst bewerken</h2>
        <?php 
            $id = $_GET['id'];
            require_once 'backend/conn.php';
            $query = "SELECT * FROM songteksten WHERE id = :id";
            $statement = $conn->prepare($query);
            $statement->execute([":id" => $id]);
            $songtekst = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="backend/songtekstenController.php" method="POST">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" id="titel" value="<?php echo $songtekst['titel']; ?>">
            </div>
            <div class="form-group">
                <label for="artiest">Artiest</label>
                <input type="text" name="artiest" id="artiest" value="<?php echo $songtekst['artiest']; ?>">
            </div>
            <div class="form-group">
                <label for="songtekst">Songtekst</label>
                <input type="text" name="songtekst" id="songtekst" value="<?php echo $songtekst['songtekst']; ?>">
            </div>
            <input type="submit" value="Bewerken">
        </form>
    </div>
</body>
</html>