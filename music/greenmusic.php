<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Groen</title>
</head>
    <?php 
    require_once('../header.php');
    ?>
<body class="green-bg">
<a class="link-substructure" href="greenmusic.php"><?php echo $base_url; ?>/music/green.php</a>
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
        </div>
    </div>
    
</body>
</html>
