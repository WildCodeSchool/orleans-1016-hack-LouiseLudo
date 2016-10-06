<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet_formulaire.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script href="http://cdn-files.deezer.com/js/min/dz.js"></script>
    <script href="https://e-cdns-files.dzcdn.net/js/min/dz.js"></script>

    <title>WEATHERMOOD</title>

</head>
<body>
    <div class="container-fluid">


        <div class="row-formulaire col-lg-offset-4 col-lg-4">
            <form  method = "GET" action="index.php">
                Ville: <input type = "text" name = "ville" placeholder="Placez votre ville" />
                <input type="submit" value="Envoyer"/>
            </form>
        </div>

        <?php include ('meteo.php')?>



    </div>
</body>
</html>