<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>C2 CodeCamp - Koffie</title>
</head>
<body class="violet-bg">
    <?php 
        require_once('../header.php');
    ?>

    <main>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="dranken.php" class="link-substructure"> Dranken</a> > <a href="#" class="link-substructure"> Warme dranken</a>  > <a href="koffie.php" class="link-substructure">Koffie</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <div class="koffie">
                    <div class="fontsize-18">
                        <div class="flex">
                            <h1>Koffie</h1>                            
                            <p class="link-color">Of ga naar: <a href="../information/georgecloony.php">George Clooney</a></p>
                        </div>
                        <p>Koffie is een meestal warm genuttigde drank, die wordt bereid op basis van water en gedroogde en gebrande pitten van de koffieplant die vanwege hun vorm koffiebonen worden genoemd. Koffie bevat het stimulerende middel cafeïne</p>
                        <img src="../img/koffie.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>