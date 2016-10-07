<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet_formulaire.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script href="http://cdn-files.deezer.com/js/min/dz.js"></script>
    <script href="https://e-cdns-files.dzcdn.net/js/min/dz.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Dosis:300,400,500,700" rel="stylesheet">

    <title>WEATHERMOOD</title>

</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>WEATHERMOOD</h1>
            <div class="row-formulaire">
                <span style="font-family: 'Dosis', sans-serif;">
                <form  method = "GET" action="index.php" class="col-lg-offset-3 col-lg-9">
                    <input type = "text" name = "ville" placeholder="Place a city" id="search" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </span>
                </form>
            </div>
        </div>
        <div class="row">
            <div class=" text1 col-lg-6">
                AEIO
            </div>
            <div class=" text2 col-lg-6">
                YOP
            </div>
        </div>

            <?php include ('meteo.php')?>

        </div>

    </div>
</body>
</html>