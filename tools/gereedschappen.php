<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Gereedschappen</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="gereedschappen.php" class="link-substructure"> Gereedschappen</a>
    <div class="wrapper">
        <h1>Pagina's bijbehorend aan gereedschappen</h1>
        
        <div class="layout-links font-size-18">
            <p><b>Zagen</b></p>
            <a href="<?php echo $base_url; ?>/tools/cirkelzagen.php">Cirkelzagen</a>
            <a href="<?php echo $base_url; ?>/tools/kettingzagen.php">Kettingzagen</a>
            <a href="<?php echo $base_url; ?>/tools/handzagen.php">Handzagen</a>
            <br>
            <p><b>Schroevendraaiers</b></p>
            <a href="<?php echo $base_url; ?>/tools/schroevendraaiers.php">Schroevendraaiers</a>
            <br>
            <p><b>Hamers</b></p>
            <a href="<?php echo $base_url; ?>/tools/hamers.php">Hamers</a>
        </div>
    </div>
</body>
</html>