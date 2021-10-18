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
<a class="link-substructure" href="orangemusic.php">C2PRA/music/orangemusic.php</a>
    <div class="wrapper">
        <div class="layout-pages">
            <div class="mybaby">
                <h1>U Prising - My Baby</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/U-Prising-MyBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/U-Prising-MyBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
            <div class="muse">
                <h1>U Prising - Muse</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/U-Prising-Muse.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/U-Prising-Muse.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>

            <div class="muse">
                <div class="fontsize-18">
                    <h1>Plug in baby - Muse</h1>
                    <?php
                        $myfile = fopen("../Songteksten/PlugInBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/PlugInBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
