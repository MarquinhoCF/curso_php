<?php

    if (5 == "5") {
        echo '5 é igual a "5" <br>';
    }  

    // op de identico
    if (5 === "5") {
        echo '5 é igual a "5" <br>';
    }

    if (5 === 5) {
        echo '5 é igual a 5 <br>';
    }

    if (3 === "teste") {
        echo "É igual <br>";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if ($a === $b) {
        echo "A é igual a B <br>";
    }

    if ($a === $c) {
        echo "A é igual a C <br>";
    }