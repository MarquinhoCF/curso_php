<?php

    class Car {

        public $rodas;
        public $aro = 20;
        public $cor = 'vermelho';

        function ligar() {
            echo "Vruuuuuum!<br>";
        }

    }

    $ferrari = new Car;

    $ferrari->rodas = 4;

    echo $ferrari->rodas . "<br>";
    echo $ferrari->aro . "<br>";
    echo $ferrari->cor . "<br>";

    $ferrari->cor = 'azul';

    echo $ferrari->cor . "<br>";

    $ferrari->ligar();
