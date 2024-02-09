<?php

    echo 1.23;
    echo "<br>";
    echo 4.56;

    $c = -78.9;
    echo "<br>";
    echo $c;

    echo "<br>";

    if (is_float($c)) {
        echo "Sim, podemos ter floats negativos!!<br>";
    }

    if (is_int($c)) {
        echo "É um inteiro";
    }

