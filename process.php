<?php
    //variabili che prendono il valore
    $name = $_POST['name'];
    $color = $_POST['color'];

    #stampa password senza censura (."". = +""+)
    $password = $name . $color;
    echo "La tua password è: $password";
    echo "<br>";
    echo "la lunghezza è: ".strlen($password);
    echo "<br>";

    /*
    password con 
    censura
    */
    $censored_password = str_replace($color, "***", $password);
    echo "La tua password censurata è: $censored_password";
    echo "<br>";
    echo "La tua lunghezza è:"." ".strlen($censored_password);

?>