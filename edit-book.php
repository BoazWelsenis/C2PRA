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
    <title>Boek bewerken</title>
    <link rel="icon" href="img/logo/logo-nobg.png">
</head>
<body>
    <?php include_once('header.php') ?>

    <div class="form-style">
        <h2>Boeken bijwerken</h2>
        <?php 
            $id = $_GET['id'];
            require_once 'backend/conn.php';
            $query = "SELECT * FROM boeken WHERE id = :id";
            $statement = $conn->prepare($query);
            $statement->execute([":id" => $id]);
            $boek = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

            <form action="backend/boekenController.php" method="POST">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label for="titel">Titel</label>
                    <input type="text" name="titel" id="titel" value="<?php echo $boek['titel']; ?>">
                </div>
                <div class="form-group">
                    <label for="auteur">Auteur</label>
                    <input type="text" name="auteur" id="auteur" value="<?php echo $boek['auteur']; ?>">
                </div>
                <div class="form-group">
                    <label for="bladzijdes">Bladzijdes</label>
                    <input type="number" name="bladzijdes" id="bladzijdes" value="<?php echo $boek['bladzijdes']; ?>">
                </div>
                <div class="form-group">
                    <label for="beschrijving">Beschrijving</label>
                    <input type="text" name="beschrijving" id="beschrijving" value="<?php echo $boek['beschrijving']; ?>">
                </div>
                <div class="form-group">
                    <label for="prijs">Prijs</label>
                    <input type="number" step="any" name="prijs" id="prijs" value="<?php echo $boek['prijs']; ?>"> <!-- Save decimals in MySQL Table: https://stackoverflow.com/questions/16629759/how-to-store-decimal-in-mysql -->
                </div>
                <div class="form-group">
                    <label for="buylink">Link naar product</label>
                    <input type="text" name="buylink" id="buylink" value="<?php echo $boek['buylink'] ?>">
                </div>
                <input type="submit" value="Bewerken">
            </form>
        </div>
</body>
</html>