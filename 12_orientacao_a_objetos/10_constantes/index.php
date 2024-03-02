<?php

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante() {

            echo self::BRACOS . "<br>";

        }

    }

    $marcos = new Humano;
    echo $marcos::OLHOS . "<br>";
    echo $marcos::BRACOS . "<br>";
    echo $marcos::PERNAS . "<br>";
    $marcos->mostrarConstante();