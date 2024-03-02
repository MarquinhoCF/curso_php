<?php

    interface Caracteristicas {
        const NOME = "Marcos";

        public function falar();
    }

    class Humano implements Caracteristicas {
        public $idade = 29;

        public function falar() {
            echo "Olá mundo<br>";
        }

        public function dizerNome() {
            echo "Meu nome é " . self::NOME . "<br>";
        }
    }

    $marcos = new Humano;
    $marcos->falar();
    $marcos->dizerNome();