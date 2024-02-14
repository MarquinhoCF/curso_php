<?php

    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while ($i < count($array)) {

        $numAtual = $array[$i];

        if ($numAtual === 30 || $numAtual === 40) {
            $i++;
            continue;
        }

        echo "Elemento: $numAtual <br>";

        $i++;
    }