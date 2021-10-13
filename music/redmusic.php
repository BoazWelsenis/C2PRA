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
        <h1>Plug in baby - Muse</h1>
        <?php
            $myfile = fopen("../Songteksten/PlugInBaby.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("../SongTeksten/PlugInBaby.txt"));
            fclose($myfile);
        ?>
        <h1>Transylvia - Iron Maiden</h1>
        <p>Instrumental</p>
        <h1>Madness - Muse</h1>
        <?php
            $myfile = fopen("../Songteksten/Madness.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("../SongTeksten/Madness.txt"));
            fclose($myfile);
        ?>
    </div>

</body>
</html>
