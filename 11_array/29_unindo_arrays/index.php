<?php

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 43.3];
    $arr4 = ['asd', 'as', 'a'];

    $arrayNovo = array_merge($arr1, $arr2, $arr3, [0, 1]);

    print_r($arrayNovo);
    echo "<br>";