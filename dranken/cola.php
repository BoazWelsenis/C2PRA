<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Cola</title>
</head>
<body class="orange-bg">
    <?php 
        require_once('../header.php');
    ?>

    <main>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/dranken/dranken.php" class="link-substructure"> Dranken</a> > <a href="#" class="link-substructure"> Frisdranken</a>  > <a href="cola.php" class="link-substructure">Cola</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <div class="cola">
                    <div class="fontsize-18">
                        <div class="flex">
                            <h1>Cola</h1>    
                            <p class="link-color">Of ga naar: <a href="../information/jamesbond.php">Roger Moore</a></p>
                        </div>
                        <p>Cola is een koolzuurhoudende frisdrank. Het smaakt zoet en bevat circa 28-32 mg cafeïne per 33 cl. Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen. Anders dan de meeste frisdranken bevat het geen citroenzuur, maar fosforzuur. Dieetcola bevat zowel fosforzuur als citroenzuur.</p>
                        <img src="../img/cola.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>