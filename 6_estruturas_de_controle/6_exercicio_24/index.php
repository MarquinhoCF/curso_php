<?php

    $a = 12;
    $b = "Roda";
    $c = [];

    if (is_int($a)) {
        echo "É um inteiro 1<br>";
    } else {
        echo "Não é um inteiro 1<br>";
    }

    if (is_int($b)) {
        echo "É um inteiro 2<br>";
    } else {
        echo "Não é um inteiro 2<br>";
    }

    if (is_int($c)) {
        echo "É um inteiro 3<br>";
    } else {
        echo "Não é um inteiro 3<br>";
    }

    // EXERCÍCIO 24B

    $peso = 86.12;

    if ($peso > 80) {
        echo "O pacote está pesado demais! <br>";
    } else {
        echo "Peso dentro do limite! <br>";
    }
