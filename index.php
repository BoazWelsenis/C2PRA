<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>C2 CodeCamp - Home</title>
</head>
<body>    
    <?php include_once('header.php'); ?>
    <?php require_once 'backend/config.php'; ?>

    <main>
        <div class="wrapper">
            <h1 class="title-page">Home</h1>


            <div class="info-index-page">
                    <div class="contact-info">
                        <div>
                            <h2>Contact gegevens</h2>
                            <p>John Doe</p>
                            <p><a class="tel-link" href="tel:0612345678">06-12345678</a></p>
                            <a class="mail-link" href="mailto:john.doe@hotmail.com">john.doe@hotmail.com</a>
                            <p class="adres">Koestraat 1 Den Bosch</p>
                        </div>
                        <div>
                            <div class="datum-tijd">
                                <h2>Datum & Tijd</h2>
                                <div id="time"> </div>
                                <!-- https://stackoverflow.com/questions/5091888/how-to-update-time-regularly -->
                                <script language="javascript">
                                    function updateClock() {
                                        var now = new Date(),
                                            months = ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'];
                                        time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(),

                                            date = [now.getDate(),
                                                months[now.getMonth()],
                                                now.getFullYear()].join(' ');

                                        document.getElementById('time').innerHTML = [date, time].join(' / ');

                                        setTimeout(updateClock, 1000);
                                    }
                                    updateClock();
                                </script>
                        </div>
                    </div>
                </div>
                <div class="index-bottom-row">
                    <!-- https://www.mapsdirections.info/nl/maak-een-google-map/ -->
                    <div class="plattegrond-omgeving">
                        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=nl&amp;q=Koestraat%201%20Den%20Bosch+(Koestraat%201%20Den%20Bosch)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/nl/cirkel-straal-kaart/">Cirkel op kaart Google</a></iframe></div>
                    </div>
                    <div class="index-logo">
                        <img src="img/logo/logo3.png" alt="logo">
                    </div>
                </div>

                </div>



            </div>
        </div>
    </main>
</body>
</html>