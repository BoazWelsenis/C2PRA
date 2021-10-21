<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>C2 CodeCamp - Boeken</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="boeken.php" class="link-substructure">Boeken</a>
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Boeken</h1>

                <div class="fontsize-18">
                    <p>Het boek is een veelgebruikte manier om informatie vast te leggen in de vorm van tekst en afbeeldingen en om deze informatie weer te geven, op te slaan en te verspreiden. Het is een document van vaak niet al te kleine omvang.
                    Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei. Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling informatie, aangeduid ('een boek schrijven', 'een boek downloaden').
                    Het woord 'boek' is vermoedelijk afkomstig van het Germaanse woord voor beuk, boche. De omslagen van de eerste boeken werden namelijk gemaakt van een rechthoekig stuk (beuken)hout. Het Griekse woord biblia (boeken) is het meervoud van biblion dat oorspronkelijk 'papyrusje' betekende, het materiaal waarop in de oudheid meestal werd geschreven, en later werd gebruikt als aanduiding van papier, geschrift en boek(rol).</p>
                </div>
                <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>

            </div>
        </div>
    </main>
</body>
<script>
    function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>
</html>