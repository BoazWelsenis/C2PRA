<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
                <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
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
