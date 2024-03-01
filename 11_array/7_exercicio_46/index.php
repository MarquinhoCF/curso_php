<?php

    $arr = [
        range(1,4),
        range(5,8),
        range(9,12)
    ];

    for ($i = 0; $i < count($arr); $i++) {
        echo "Imprimindo array EXTERNO: " . ($i + 1) . "<br>";
        for ($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . "<br>";
        }
        echo "Mudando de array <br>";
    }