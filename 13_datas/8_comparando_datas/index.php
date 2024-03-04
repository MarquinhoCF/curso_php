<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2026, 10, 10);
    $dataC->setDate(2026, 10, 10);
    $dataB->setTime(10, 10, 10);
    $dataC->setTime(10, 10, 10);

    if ($dataB > $dataA) {
        echo "A data B é maior que a data A<br>";
    } else {
        echo "A data A é maior que a data B<br>";
    }

    if ($dataB < $dataA) {
        echo "A data B é menor que a data A<br>";
    } else {
        echo "A data A é menor que a data B<br>";
    }

    if ($dataB == $dataC) {
        echo "As datas são iguais<br>";
    } else {
        echo "As datas não são iguais<br>";
    }