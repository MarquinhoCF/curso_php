<?php

    class Humano {
        public function falar() {
            echo "Olá <br>";
        }
    }

    $marcos = new Humano;

    if (is_object($marcos)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    $teste = 10;

    if (is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($marcos) . "<br>";

    if (method_exists($marcos, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }

    if (method_exists($marcos, "asd")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }