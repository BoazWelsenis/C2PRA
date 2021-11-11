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
    <form action="backend/songtekstenController.php" method="EDIT">
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel">
        </div>
        <div class="form-group">
            <label for="artiest">Artiest</label>
            <input type="text" name="artiest" id="artiest">
        </div>
        <div class="form-group">
            <label for="songtekst">Songtekst</label>
            <input type="text" name="songtekst" id="songtekst">
        </div>
        <input type="submit" value="Bewerken">
    </form>
</div>
</body>
</html>