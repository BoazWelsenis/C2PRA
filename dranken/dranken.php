<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>C2 CodeCamp - Dranken</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="dranken.php" class="link-substructure"> Dranken</a>
    <div class="wrapper">
        <h1>Pagina's bijbehorend aan dranken</h1>
        
        <h2>Warme dranken</h2>
        <div class="layout-links font-size-18">
            <a href="<?php echo $base_url; ?>/dranken/koffie.php">Koffie</a>
            <a href="<?php echo $base_url; ?>/dranken/latte.php">Latte</a>
            <a href="<?php echo $base_url; ?>/dranken/thee.php">Thee</a>
            <br>
        </div>

        <h2>Frisdranken</h2>
        <div class="layout-links font-size-18">
            <a href="<?php echo $base_url; ?>/dranken/7up.php">Cola</a>
            <a href="<?php echo $base_url; ?>/dranken/7up.php">7Up</a>
            <a href="<?php echo $base_url; ?>/dranken/sinas.php">Sinas</a>
        </div>
    </div>
</body>
</html>
