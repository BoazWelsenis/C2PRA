<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Luke Skywalker</title>
</head>
<body class="green-bg">
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/information/informatie.php" class="link-substructure"> Informatie</a>  > <a href="lukeskywalker.php" class="link-substructure">Luke Skywalker</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Luke Skywalker</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../information-textfiles/lukeskywalker.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../information-textfiles/lukeskywalker.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <img src="../img/Informatie_foto's/Lukeskywalker.jpg" alt="Lukeskywalker" width="300rem" height="auto">
            </div>
        </div>
    </main>
</body>
</html>