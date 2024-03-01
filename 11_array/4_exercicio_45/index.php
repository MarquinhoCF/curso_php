<?php

    $arr = range(10,45);

    foreach($arr as $num) {
        $numAdicionado = $num + 6;
        echo $numAdicionado;
        if ($numAdicionado > 30) {
            echo " <- este número é muito alto";
        }
        echo "<br>";
    }