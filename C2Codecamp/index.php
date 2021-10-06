<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>    
    <?php include_once('header.php'); ?>

    <main>
        <h1>Home</h1>

        <h2>Contact gegevens</h2>


        <div class="datum-tijd">
            <h2>Datum & Tijd</h2> 
            <script language="javascript">
                var today = new Date();
                document.write(today);
            </script>
        </div>
    </main>
</body>
</html>