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
    <title>C2 CodeCamp - Rood</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body class="red-bg">
<a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/music/songteksten.php" class="link-substructure"> Songteksten</a>  > <a href="redmusic.php" class="link-substructure">Rood</a> 
    <div class="wrapper">
        <div class="layout-pages">

            <div class="muse">
                <h1>Plug in baby - Muse</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/PlugInBaby.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/PlugInBaby.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <div class="heart-btn">
                    <div class="content">
                    <span class="heart"></span>
                    <span class="text">Like</span>
                    <span class="numb"></span>
                    </div>
                </div>
            </div>

            <div class="ironmaidon">
                <h1>Transylvia - Iron Maiden</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GY0RZriJ3gk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="heart-btn">
                    <div class="content">
                    <span class="heart"></span>
                    <span class="text">Like</span>
                    <span class="numb"></span>
                    </div>
                </div>

            <div class="muse">
                <h1>Madness - Muse</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/Madness.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/Madness.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <div class="heart-btn">
                    <div class="content">
                    <span class="heart"></span>
                    <span class="text">Like</span>
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
        $('.heart').toggleClass("heart-active")
    });
    });
</script>

</body>
</html>
