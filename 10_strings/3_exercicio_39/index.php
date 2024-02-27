<?php

    $arr = [
        'Porta' => 100, 
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCaros($arr) {
        $arrDeItensCaros = [];

        foreach($arr as $item => $preco) {
            if ($preco > 10) {
                array_push($arrDeItensCaros, $item);
            }
        }

        return $arrDeItensCaros;
    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);