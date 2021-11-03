<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include_once('header.php') ?>
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
            <input type="number" name="prijs" id="prijs">
        </div>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>