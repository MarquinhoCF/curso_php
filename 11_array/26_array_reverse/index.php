<?php

    $arr = range(1,5);

    $arrRev = array_reverse($arr);

    print_r($arr);
    echo "<br>";
    print_r($arrRev);
    echo "<br>";

    $arr2 = ['Marcos', 12, true, [1, 2]];

    $arrRev2 = array_reverse($arr2);

    print_r($arr2);
    echo "<br>";
    print_r($arrRev2);
    echo "<br>";