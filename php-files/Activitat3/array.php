
<?php 

    // Definition of variables (arrays and integers)

    $array = array();
    $parells = array();
    $imparells = array();
    $tenmultiple = array();
    $bigger = array();
    $lesser = array();
    $sum = 0;
    $sum_parell = 0;
    $sum_imparell = 0;
    $len = 30;
    
    /*
    Generate the original array which contains X random numbers and classify them into
    Even: $parells
    Odd: $imparells
    Also sum ALL the values ($sum), ALL EVEN values ($sum_parell) and ALL ODD values ($sum_imparell)
    */

    for ($x = 0; $x < $len; $x++) {
        $random_number = rand(100, 999);
        $array[] = $random_number; 
        $sum += $random_number;

        if ($random_number % 2 == 0) {
            $parells[] = $random_number;
            $sum_parell += $random_number;
            if ($random_number % 10 == 0) {
                $tenmultiple[] = $random_number; 
            }
        }
        else {
            $imparells[] = $random_number;
            $sum_imparell += $random_number;
        }

    }

    // Creation of the table with the original array (in no particular order)

    echo "<h2>Original Array</h2>";
    echo "<table class=table><tr class=table-info>";

    foreach ($array as $index => $valor) {
        echo "<td>$index</td>";
    }

    echo "</tr>";
    echo "<tr class=table-info>";

    foreach ($array as $index => $valor) {
        echo "<td>$valor</td>";
    }

    echo "</tr></table>";

    // Creation of the table with the even numbers first and odds after

    echo "<h2>Array with even numbers firts and odds after</h2>";
    echo "<table class=table><tr class=table-success>";
    foreach ($array as $index => $valor) {
        echo "<td>$index</td>";
    }
    echo "</tr>";
    echo "<tr class=table-success>";
    foreach ($parells as $index => $valor) {
        echo "<td>$valor</td>";
    }
    foreach ($imparells as $index => $valor) {
        echo "<td>$valor</td>";
    }

    echo "</tr></table>";

    // Show the sum of the even numbers

    echo "<h2>Total Evens</h2>";
    echo "<div class='col-sm-1 rounded-4 border text-center'>$sum_parell</div>";

    // Show the sum of the odd numbers

    echo "<h2>Total Odds</h2>";
    echo "<div class='col-sm-1 rounded-4 border text-center'>$sum_imparell</div>";

    // Show the sum of all the numbers

    echo "<h2>Total Evens and Odds</h2>";
    echo "<div class='col-sm-1 rounded-4 border text-center'>$sum</div>";

    // Definition and visualization of the average

    $mitjana = round($sum / $len,2);
    echo "<h2>Mitjana</h2>";
    echo "<div class='col-sm-1 rounded-4 border text-center'>$mitjana</div>";

    // Creation of the table with the multiples of ten (taken from the $tenmultiple array)

    echo "<h2>Multiples of ten numbers</h2>";
    echo "<table class=table><tr class=table-success>";
    foreach ($tenmultiple as $index => $valor) {
        echo "<td>$index</td>";
    }
    echo "</tr>";
    echo "<tr class=table-success>";
    foreach ($tenmultiple as $index => $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr></table>";

    // Definition of both $bigger and $lesser array, which contains the values 'greater' and 'lesser or equal' respectively

    foreach ($array as $index => $valor) {
        if ($mitjana < $valor) {
            $bigger[] = $valor;
        }
        else {
            $lesser[] = $valor;
        }
    }

    // Creation of table with values greater than the average (taken from the $bigger array)

    echo "<h2>Values greater than the average</h2>";
    echo "<table class=table><tr class=table-success>";
    foreach ($bigger as $index => $valor) {
        echo "<td>$index</td>";
    }
    echo "</tr>";
    echo "<tr class=table-success>";
    foreach ($bigger as $index => $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr></table>";

    // Creation of table with values lesser or equal than the average (taken from the $lesser array)

    echo "<h2>Values lesser or equal than the average</h2>";
    echo "<table class=table><tr class=table-success>";
    foreach ($lesser as $index => $valor) {
        echo "<td>$index</td>";
    }
    echo "</tr>";
    echo "<tr class=table-success>";
    foreach ($lesser as $index => $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr></table>";
?>