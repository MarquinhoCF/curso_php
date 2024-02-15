<?php

    $arr = [];

    for ($i = 0; $i <= 30; $i++) {
        array_push($arr, $i);
    }

    print_r($arr);

    echo "<br><br><br>";

    function arrayMaiorQueSete($array) {
        $arrayRetorno = [];

        for ($j = 0; $j < count($array); $j++) {
            if ($array[$j] > 7) {
                array_push($arrayRetorno, $array[$j]);
            }
        }

        return $arrayRetorno;
    }

    $novoArray = arrayMaiorQueSete($arr);

    print_r($novoArray);