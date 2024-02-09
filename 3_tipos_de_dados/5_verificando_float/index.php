<?php

    if (is_float(5.22)) {
        echo "É um float <br>";
    }

    if (!is_int(5)) {
        echo "Não é um float <br>";
    }

    if (!is_int("Um texto aí")) {
        echo "Não é um float <br>";
    }

    $numero = 10.5;

    if (is_int($numero)) {
        echo "É um float <br>";
    } else {
        echo "Não é um float <br>";
    }

    $outronumero = 10;

    if (is_int($outronumero)) {
        echo "É um float <br>";
    } else {
        echo "Não é um float <br>";
    }