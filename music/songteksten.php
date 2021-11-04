<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Songteksten</title>
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
        <h1>Toegevoegd door admin: </h1>
        <?php 
        require_once('../backend/conn.php');
        $query = 'SELECT * FROM songteksten';
        $statement = $conn->prepare($query);
        $statement->execute();
        $songteksten = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <?php foreach($songteksten as $songtekst): ?>
            <div class="fontsize-18 pb-1rem">
                <h2><?php echo $songtekst['titel'], " - ", $songtekst['artiest']?></h2>
                <p><?php echo $songtekst['songtekst']?></p>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>
