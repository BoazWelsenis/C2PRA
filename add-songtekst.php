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
    <h2>Songtekst toevoegen</h2>
    <form action="backend/songtekstenController.php" method="POST">
        <div class="form-group">
            <label for="Title">Titel</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="Artist">Artiest</label>
            <input type="text" name="artist" id="artist">
        </div>
        <input type="submit" value="toevoegen">
    </form>
</body>
</html>