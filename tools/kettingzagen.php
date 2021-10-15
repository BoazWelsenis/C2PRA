<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Kettingzagen</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <a class="link-substructure" href="kettingzagen.php">C2PRA/tools/kettingzagen.php</a>
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Kettingzagen</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../tools-textfiles/kettingzagen.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../tools-textfiles/kettingzagen.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>