<?php
?>

<!--<form method="GET" action=" meteo.php && afficherMusic.php">
>>>>>>> 90fe80d31057d3af780e8aeb193a6229ef014b47
    <label for="ville">Votre ville : <br></label>
    <input type="text" name="ville" placeholder="Taper votre ville de résidence ici" class="input_ville"/>
    <input type="submit" value="Envoyer"/> -->

<form action = "<?php $_PHP_SELF ?>" method = "GET">
    Ville: <input type = "text" name = "ville" />
    <input type="submit" value="Envoyer"/>

</form>
