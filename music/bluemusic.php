<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body>
    <div class="wrapper">
        <div class="layout-pages">
            <div class="queen">
                <h1>We are the champions - Queen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/WeAreTheChampions.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/WeAreTheChampions.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
            
            <div class="queen">
                <h1>Bohemian Rhapsody - Queen</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/BohemianRhapsody.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/BohemianRhapsody.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>

            <div class="queen">
                <h1>Killer Queen - Queen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/KillerQueen.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../SongTeksten/KillerQueen.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
