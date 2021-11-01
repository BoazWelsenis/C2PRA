<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/likesystem.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>C2 CodeCamp - Groen</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body class="green-bg">
<a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/music/songteksten.php" class="link-substructure"> Songteksten</a>  > <a href="greenmusic.php" class="link-substructure">Groen</a> 
    <div class="wrapper">
        <div class="layout-pages color-red">
            <div class="mybaby">
                <h1>Uprising - My Baby</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/U-Prising-MyBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/U-Prising-MyBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <div class="heart-btn">
                    <div class="content">
                    <span class="text"><!-- Hier moet een echo komen en dynamisch worden gemaakt met de database -->Like</span>
                    <span class="numb"></span>
                    </div>
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
                <div class="heart-btn">
                    <div class="content">
                    <span class="text"><!-- Hier moet een echo komen en dynamisch worden gemaakt met de database -->Like</span>
                    <span class="numb"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
        $('.content').click(function(){
            $('.content').toggleClass("heart-active")
            $('.text').toggleClass("heart-active")
            $('.numb').toggleClass("heart-active")
        });
        });
    </script>
    
</body>
</html>
