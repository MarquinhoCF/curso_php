<?php

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            echo "Número: $array[$i] <br>";
        }
    }

    echo "<br><br>";

    $novoArray = [];

    for ($i = 1; $i <= 10; $i++) {
        array_push($novoArray, $i);
    }

    print_r($novoArray);

    echo "<br><br>";

    $novoArray2 = [];

    for ($i = 10; $i <= 20; $i++) {
        array_push($novoArray2, $i);
    }

    print_r($novoArray2);

    for ($i = 0; $i < count($novoArray2); $i++) {
        if ($novoArray2[$i] % 2 != 0) {
            echo "Número ímpar: $novoArray2[$i] <br>";
        }
    }