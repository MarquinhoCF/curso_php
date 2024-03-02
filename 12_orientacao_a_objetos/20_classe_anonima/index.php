<?php

    $pessoa = new class() {
        public $nome = "Marcos";

        public function dizerNome() {
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();