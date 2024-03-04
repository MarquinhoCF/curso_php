<?php

    $cincoDias = strtotime('5 days');

    echo $cincoDias . "<br>";

    $dezDias = strtotime('10 days');

    echo $dezDias . "<br>";

    $dataAtualMais5 = date('d/m/Y', $cincoDias);

    echo $dataAtualMais5 . "<br>";

    $dataAtualMais10 = date('d/m/Y', $dezDias);

    echo $dataAtualMais10 . "<br>";

    $doisMeses = strtotime('2 months');

    echo $doisMeses . "<br>";

    $dataAtualMais2M = date('d/m/Y', $doisMeses);

    echo $dataAtualMais2M . "<br>";

    echo date('d/m/Y', strtotime('12 years')) . "<br>";