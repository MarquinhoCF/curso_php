<?php

    $lista = ["Arroz", "Trigo", "Refrigerante", "Sal", "Vinagre"];

    function listaParaString($arr) {
        $str = "Você levou estes itens do mercado: ";

        for ($i = 0; $i < count($arr); $i++) {
            if ($i === (count($arr) - 1)) {
                $str .= "$arr[$i].";
            } else {
                $str .= "$arr[$i], ";
            }
        }

        return $str;
    }

    echo listaParaString($lista);