<?php

    class Carro {
        public $rodas = 4;
        private $vidro = 'sem película';
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula) {
            $this->vidro = $pelicula;
        }

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }

    }

    class Mecanico {
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Carro;

    echo $carro->rodas . "<br>";

    $marcos = new Mecanico;

    $marcos->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    // $marcos->colocarPelicula($carro, "G20");

    echo $carro->getVidro() . "<br>";

    $carro->peliculaDeFabrica("G20");

    echo $carro->getVidro() . "<br>";

    echo $carro->getPortas() . "<br>";