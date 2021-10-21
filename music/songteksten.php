<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>C2 CodeCamp - Oranje</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="songteksten.php" class="link-substructure"> Songteksten</a>
    <div class="wrapper">
        <h1>Pagina's bijbehorend aan songteksten</h1>
        
        <div class="layout-links font-size-18">
            <a href="<?php echo $base_url; ?>/music/bluemusic.php">Blauw</a>
            <a href="<?php echo $base_url; ?>/music/orangemusic.php">Orange</a>
            <a href="<?php echo $base_url; ?>/music/redmusic.php">Rood</a>
            <a href="<?php echo $base_url; ?>/music/greenmusic.php">Groen</a>
        </div>
    </div>
</body>
</html>
