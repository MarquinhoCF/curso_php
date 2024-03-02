<?php

    class Humano {

        public $idade = 22;

        public function falar() {
            echo "Olá mundo!!<br>";
        }

        private function gritar() {
            echo "PHP É MUITO BOM!!<br>";
        }

        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "La la la<br>";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }

    }

    class Programador extends Humano {
        
        public function acessaFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixinho();

    $marcos = new Programador;
    echo "$marcos->idade <br>";
    $marcos->falar();
    $marcos->acessaGritar();
    $marcos->acessaFalarBaixinho();
    $marcos->acessaFalarBaixinhoProgramador();