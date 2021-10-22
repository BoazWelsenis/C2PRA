<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>C2 CodeCamp - Informatie</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="informatie.php" class="link-substructure"> Informatie</a>
    <div class="wrapper">
        <h1>Pagina's bijbehorend aan informatie</h1>
        
        <h2>Films</h2>
        <div class="layout-links font-size-18">
            <a href="<?php echo $base_url; ?>/information/jamesbond.php">James Bond</a>
            <a href="<?php echo $base_url; ?>/information/darthvader.php">Darth Vader</a>
            <a href="<?php echo $base_url; ?>/information/timontydalton.php">Timonty Dalton</a>
            <a href="<?php echo $base_url; ?>/information/lukeskywalker.php">Luke Skywalker</a>
            <a href="<?php echo $base_url; ?>/information/georgecloony.php">George Clooney</a>
        </div>
    </div>
</body>
</html>
