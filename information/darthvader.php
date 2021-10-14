<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Darth Vader</title>
</head>
<body class="yellow-bg">
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Darth Vader</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../information-textfiles/darthvader.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../information-textfiles/darthvader.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>