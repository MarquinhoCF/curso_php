<?php

    class Cachorro {

        function latir() {
            echo "Au au!<br>";
        }

        function andar($metros) {
            echo "O cachorro andou $metros metros<br>";
        }

    }

    $shihTzu = new Cachorro;
    $pastorAlemao = new Cachorro;

    $shihTzu->latir();
    $pastorAlemao->latir();

    $shihTzu->andar(1000);
    $pastorAlemao->andar(50);