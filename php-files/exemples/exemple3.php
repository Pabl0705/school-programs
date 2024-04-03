<?php

    $array1 = array("RED", "BLUE", "GREEN");

    $array2 = ["CYAN", "YELLOW", "MAGENTA", "BLACK"];

    echo $array1[0] . "<br />" ;
    echo $array1[1] . "<br />" ;
    echo $array1[2] . "<br />" ;

    $len = count($array1);

    for ($i=0; $i < count($array1); $i++) {
        echo $array1[$i] . " ";
    }

    $games 