<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/likesystem.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
                    <p>Bekijk hier de aanbieding van boeken:</p>
                </div>

                    <div class="grid-book">
<!--        grid-item 1 -->
                        <div class="book-item">
                            <div class="cover">
                                <a href="https://www.bol.com/nl/nl/p/asterix-39-asterix-en-de-griffioen/9300000035749012/?bltgh=mHDt77xtlOp4jyNTo8dGfw.2_36.39.ProductImage" target="_blank"><img src="https://media.s-bol.com/x7orEN8lMooP/MQ5wr0Q/910x1200.jpg" alt="bookCover"></a>
                            </div>
                            <div class="title">Asterix 39. Asterix en de Griffioen</p></div>
                            <div class="author">
                                <p>Didier Conrad</p>
                            </div>
                            <div class="description">
                                <p>Asterix, Obelix en Idefix zijn terug voor een 39e avontuur. Vergezeld door de beroemdste van de druïden..</p>
                            </div>
                            <div class="price-row">
                                <div class="price">
                                    <p>&euro; 6,95</p>
                                </div>
                                <div class="like">
                                    <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
                                </div>
                            </div>
                            <div class="buy">
                                <a href="https://www.bol.com/nl/nl/p/asterix-39-asterix-en-de-griffioen/9300000035749012/?bltgh=mHDt77xtlOp4jyNTo8dGfw.2_36.39.ProductImage" target="_blank">Kopen</a>
                            </div>
                    </div>
<!--         grid item 2               -->
                        <div class="book-item">
                            <div class="cover">
                                <a href="https://www.bol.com/nl/nl/p/wen-er-maar-aan/9300000005322320/?bltgh=mHDt77xtlOp4jyNTo8dGfw.2_36.43.ProductTitle" target="_blank"><img src="https://media.s-bol.com/7pnqQ90QVJ0r/798x1200.jpg" alt="bookCover"></a>
                            </div>
                            <div class="title">Wen er maar aan</p></div>
                            <div class="author">
                                <p>Maike Meijer</p>
                            </div>
                            <div class="description">
                                <p>In haar nietsverhullende dagboek registreert de werkloze actrice M. het kleine en grote verval in haar leven.    </p>
                            </div>
                            <div class="price-row">
                                <div class="price">
                                    <p>&euro; 17,99</p>
                                </div>
                                <div class="like">
                                    <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
                                </div>
                            </div>
                            <div class="buy">
                                <a href="https://www.bol.com/nl/nl/p/wen-er-maar-aan/9300000005322320/?bltgh=mHDt77xtlOp4jyNTo8dGfw.2_36.43.ProductTitle" target="_blank">Kopen</a>
                            </div>
                        </div>
<!-- grid item 3 -->
                        <div class="book-item">
                            <div class="cover">
                                <a href="https://www.bol.com/nl/nl/p/they-both-die-at-the-end/9200000074738274/?bltgh=vn5Luyksar8p7fnoSl5FvQ.4_36.40.ProductTitle" target="_blank"><img src="https://media.s-bol.com/KYZl6MZmB3Al/Q1pOZoZ/550x838.jpg" alt="bookCover"></a>
                            </div>
                            <div class="title">They Both Die at the End</p></div>
                            <div class="author">
                                <p>Adam Silvera</p>
                            </div>
                            <div class="description">
                                <p>On September 5th, a little after midnight, Death-Cast calls Mateo Torrez and Rufus Emeterio to give them some bad news: they're going to die today. </p>
                            </div>
                            <div class="price-row">
                                <div class="price">
                                    <p>&euro; 7,39</p>
                                </div>
                            <div class="heart-btn">
                                <div class="content">
                                <span class="text"><!-- Hier moet een echo komen en dynamisch worden gemaakt met de database -->Like</span>
                                <span class="numb"></span>
                                </div>
                            </div>
                            </div>
                            <div class="buy">
                                <a href="https://www.bol.com/nl/nl/p/they-both-die-at-the-end/9200000074738274/?bltgh=vn5Luyksar8p7fnoSl5FvQ.4_36.40.ProductTitle" target="_blank">Kopen</a>
                            </div>
                        </div>
                </div>
<!-- item 4-->
                <div class="book-item">
                    <div class="cover">
                        <a href="https://www.bol.com/nl/nl/p/invictus-library-je-bent-zoals-je-denkt/9300000042831937/?bltgh=i2MVdvhzvfJAagm-BP9EbQ.2_36.45.ProductImage" target="_blank"><img src="https://media.s-bol.com/YQ1DzNDkWrw0/ElBvGZW/864x1200.jpg" alt="bookCover"></a>
                    </div>
                    <div class="title">Je bent zoals je denkt</p></div>
                    <div class="author">
                        <p>Michael Pilarczyk</p>
                    </div>
                    <div class="description">
                        <p>Je Bent Zoals Je Denkt legt uit hoe je gedachten je dagelijkse realiteit creëren. Zoals je denkt, zo zal je zijn en zo zal je leven zich vormen.</p>
                    </div>
                    <div class="price-row">
                        <div class="price">
                            <p>&euro; 7,39</p>
                        </div>
                        <div class="like">
                            <i onclick="myFunction(this)" class="fa fa-thumbs-up" style="font-size: 40px;"></i>
                        </div>
                    </div>
                    <div class="buy">
                        <a href="https://www.bol.com/nl/nl/p/invictus-library-je-bent-zoals-je-denkt/9300000042831937/?bltgh=i2MVdvhzvfJAagm-BP9EbQ.2_36.45.ProductImage" target="_blank">Kopen</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function(){
        $('.content').click(function(){
            $('.content').toggleClass("heart-active")
            $('.text').toggleClass("heart-active")
            $('.numb').toggleClass("heart-active")
        });
        });
    </script>

</body>
</html>