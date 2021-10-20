<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - George Clooney</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="#" class="link-substructure"> Information</a>  > <a href="georgecloony.php" class="link-substructure">George Clooney</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>George Clooney</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../information-textfiles/georgecloony.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../information-textfiles/georgecloony.txt"));
                        fclose($myfile);
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>