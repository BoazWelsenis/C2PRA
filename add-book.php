<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Boek toevoegen</title>
</head>
<body>
    <?php include_once('header.php') ?>
    <div class="form-style">
    <h2>Boeken toevoegen</h2>
    <form action="backend/boekenController.php" method="POST">
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur">
        </div>
        <div class="form-group">
            <label for="bladzijdes">Bladzijdes</label>
            <input type="number" name="bladzijdes" id="bladzijdes">
        </div>
        <div class="form-group">
            <label for="beschrijving">Beschrijving</label>
            <input type="text" name="beschrijving" id="beschrijving">
        </div>
        <div class="form-group">
            <label for="prijs">Prijs</label>
            <input type="number" step="any" name="prijs" id="prijs"> <!-- Save decimals in MySQL Table: https://stackoverflow.com/questions/16629759/how-to-store-decimal-in-mysql -->
        </div>
        <div class="form-group">
            <label for="buylink">Link naar product</label>
            <input type="text" name="buylink" id="buylink">
        </div>
        <input type="submit" value="Toevoegen">
    </form>
</div>
</body>
</html>