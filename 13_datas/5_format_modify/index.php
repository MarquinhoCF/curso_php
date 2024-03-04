<?php

    $data = new DateTime();

    echo $data->format('d/m/Y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    echo $data->format('l - F - Y') . "<br>";

    $data->modify('+5 days');

    echo $data->format('d/m/Y') . "<br>";

    $data->modify('+5 months');

    echo $data->format('d/m/Y') . "<br>";

    $data->modify('-3 years');

    echo $data->format('d/m/Y') . "<br>";