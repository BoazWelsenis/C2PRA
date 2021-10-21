<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>C2 CodeCamp - Blauw</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body class="blue-bg">
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/music/songteksten.php" class="link-substructure"> Songteksten</a>  > <a href="bluemusic.php" class="link-substructure">Blauw</a> 
    <div class="wrapper">
        <div class="layout-pages">
            <div class="queen">
                <h1>We are the champions - Queen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/WeAreTheChampions.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/WeAreTheChampions.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
            </div>
            
            <div class="queen">
                <h1>Bohemian Rhapsody - Queen</h1>
                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/BohemianRhapsody.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/BohemianRhapsody.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
            </div>

            <div class="queen">
                <h1>Killer Queen - Queen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../Songteksten/KillerQueen.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../Songteksten/KillerQueen.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
            </div>
        </div>
    </div>
    <script>
    function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>
    
</body>
</html>
