<?php

    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }

    $marcos = new Pessoa;

    $marcos->falar();
    $marcos->falar();

    $joao = new Pessoa;

    $joao->falar();

    $marcos->somar(2, 2);

    $joao->somar(10, 12);