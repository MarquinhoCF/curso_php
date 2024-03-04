<?php

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    $data->setDate(2001, 9, 14);

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/Y') . "<br>";

    $data->setTime(5, 12, 10);

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/Y') . "<br>";