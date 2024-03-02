<?php

    class Car {
        public $cor;
        public $tetoSolar;
        public $velMax;

        function setVelMax($vel) {
            $this->velMax = $vel;
        }

        function getVelMax() {
            echo "A velocidade máxima deste carro é: $this->velMax Km/h<br>";
        }
    }

    $bmw = new Car;
    $bmw->cor = 'branca';
    $bmw->tetoSolar = true;
    $bmw->setVelMax(200);
    $bmw->getVelMax();

    $ferrari = new Car;
    $ferrari->setVelMax(300);
    $ferrari->getVelMax();