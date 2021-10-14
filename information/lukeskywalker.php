<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Luke Skywalker</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <div class="wrapper">
            <div class="layout-pages">
                <a href="lukeskywalker.php">C2PRA/information/lukeskywalker.php</a>
                <h1>Luke Skywalker</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../information-textfiles/lukeskywalker.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../information-textfiles/lukeskywalker.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>