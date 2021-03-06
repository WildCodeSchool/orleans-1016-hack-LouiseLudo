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
    <link rel="icon" type="image/png" href="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.M02873f977b4578b39d59302baa951c6fH0%26pid%3D15.1&f=1" />

    <title>WEATHERMOOD</title>

</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 id="titre">WEATHERMOOD <span class=" titre2  "> Play the Weather's music</span></h1>
            <div class="row-formulaire">
                <span id="stylesearch">
                <form  method = "GET" action="index.php" class="col-lg-offset-3 col-lg-9 styleform">
                    <input type = "text" name = "ville" placeholder="Place a city here" id="search" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </span>
                </form>
            </div>
        </div>

        <?php

        if ((!isset($_GET["ville"])) || (!($_GET["ville"])))

        {
            echo '<div class="row ">
                <div class=" text1 col-lg-6">
                    <h2>
                        <u>   
                            Music
                        </u>
                    </h2>
                    <img class="musiquedessin img-responsive" src="http://www.gif-maniac.com/gifs/51/50514.gif" alt="musique">
                    <p class="anime">Music is always connected to the weather</p>
                </div>
                <div class=" text2 col-lg-6">
                    <h2>
                        <u>
                            Weather in the World
                        </u> 
                    </h2>
                    <img class="sundessin img-responsive" src="http://www.icone-gif.com/gif/espace/soleil/1reflect.gif" alt="sun">
                    <p class="anime">Find the world\'s weather in one click!</p>
                </div>
            </div>';
        }


          ?>
            <?php include ('meteo.php')?>

    </div>
</body>
        <footer>
            <div class="row">
                <div class="col-xs-3 col-lg-offset-4 col-lg-1 network">
                   <a href="https://www.facebook.com"> <img src="wg_stained_sm/facebook.png" alt="logo facebook">  </a>
                </div>
                <div class="col-xs-3 col-lg-1 network">
                   <a href="https://www.twitter.com"> <img src="wg_stained_sm/twitter.png" alt="logo twitter"> </a>
                </div>
                <div class="col-xs-3 col-lg-1 network">
                    <a href="https://www.linkedin.com"> <img src="wg_stained_sm/linkedin.png" alt="logo linkedin"> </a>
                </div>
                <div class="col-xs-3 col-lg-5 network">
                    <a href="https://www.tumblr.com"> <img src="wg_stained_sm/tumblr.png" alt="logo tumblr"> </a>
                </div>
            </div>
        </footer>
</html>