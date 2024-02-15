<?php

    function defineCorcarro($cor = "vermelho") {
        return "A cor do carro é $cor <br>";
    }

    $carroVermelho = defineCorcarro();
    echo $carroVermelho;

    $carroAzul = defineCorcarro("azul");
    echo $carroAzul;