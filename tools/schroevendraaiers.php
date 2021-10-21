<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Schroevendraaiers</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="gereedschappen.php" class="link-substructure"> Gereedschappen</a>  > <a href="schroevendraaiers.php" class="link-substructure">Schroevendraaiers</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Schroevendraaiers</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../tools-textfiles/schroevendraaiers.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../tools-textfiles/schroevendraaiers.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>