<?php

    $carro = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

    list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

    echo $marca . "<br>";
    echo $motor . "<br>";
    echo $cor . "<br>";
    echo $aro . "<br>";
    echo $opcional . "<br>";
    echo $cambio . "<br>";

    print_r($carro);
    echo "<br>";