<?php

    $i = 0;

    $c = "variável teste";

    while ($i <= 10) {
        echo " ---------- Loop EXTERNO --> $i -------- <br>";

        $j = 0;

        echo $c . "<br>";

        while ($j <= 5) {
            echo "Loop INTERNO --> $j <br>";

            echo $c . " 2<br>";

            $j++;
        }

        $i++;
    }