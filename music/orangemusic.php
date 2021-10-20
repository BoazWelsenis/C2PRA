<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Oranje</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body class="orange-bg">
<a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="#" class="link-substructure"> Songteksten</a>  > <a href="orangemusic.php" class="link-substructure">Oranje</a> 
    <div class="wrapper">
        <div class="layout-pages">
            <div class="mybaby">
                <h1>Uprising - My Baby</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/U-Prising-MyBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/U-Prising-MyBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
            <div class="muse">
                <h1>Uprising - Muse</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/U-Prising-Muse.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/U-Prising-Muse.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>

            <div class="muse">
                <h1>Plug in baby - Muse</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/PlugInBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/PlugInBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
