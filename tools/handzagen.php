<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Handzagen</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="gereedschappen.php" class="link-substructure"> Gereedschappen</a> > <a href="#" class="link-substructure"> Zagen</a>  > <a href="handzagen.php" class="link-substructure">Handzagen</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Handzagen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../tools-textfiles/handzagen.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../tools-textfiles/handzagen.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <img src="../img/information-pictures/Handzaag.png" alt="Handzaag" width="300rem" height="auto">
            </div>
            <div class="easter-egg">
                <span>De week kan je ook door de middenzagen</span>
            </div>
        </div>
    </main>
</body>
</html>