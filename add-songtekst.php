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
    <h2>Songtekst toevoegen</h2>
    <form action="backend/songtekstenController.php" method="POST">
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
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>