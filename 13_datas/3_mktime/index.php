<?php

    $timeStampNascimento = mktime(7, 30, 12, 9, 14, 2001); // Hora, Minutos, Segundos, Mês, Dia, Ano

    echo $timeStampNascimento . "<br>";

    $dataNascimento = date('d/m/Y', $timeStampNascimento);

    echo $dataNascimento . "<br>";

    $dataEspecifica = date('d/m/Y', mktime(10, 22, 37, 7, 5, 2041));

    echo $dataEspecifica . "<br>";