<?php

    if (is_int(5)) {
        echo "É um inteiro <br>";
    }

    if (!is_int(5.34)) {
        echo "Não é um inteiro <br>";
    }

    if (!is_int("Um texto aí")) {
        echo "Não é um inteiro <br>";
    }

    $numero = 10;

    if (is_int($numero)) {
        echo "É um inteiro <br>";
    } else {
        echo "Não é um inteiro <br>";
    }

    $outronumero = 10.5;

    if (is_int($outronumero)) {
        echo "É um inteiro <br>";
    } else {
        echo "Não é um inteiro <br>";
    }