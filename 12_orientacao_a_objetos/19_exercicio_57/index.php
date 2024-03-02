<?php

    class Cachorro {
        public $nome;
        public $cor;
        public $patas;

        function __construct($nome, $cor, $patas) {
            $this->nome = $nome;
            $this->cor = $cor;
            $this->patas = $patas;
        }

        public function exibirCachorro() {
            echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor e tem $this->patas patas <br>";
        }
    }

    $luna = new Cachorro("Luna", "malhada preta e branco", 4);
    $luna->exibirCachorro();

    $nome = "Maylon";
    $cor = "malhada marrom e branco";
    $patas = 4;

    $luna = new Cachorro($nome, $cor, $patas);
    $luna->exibirCachorro();