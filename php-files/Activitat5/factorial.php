<?php
function calcularFactorial($max) {
    $resultado = 1;

    if ($max < 0) {
        return "El nombre ha de ser positiu";
    }
            
    // Calculando el factorial
    for ($i = 2; $i <= $max; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = validate($_POST["numero"]);
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function factorialtable() {
    $maxtable = 100;
    global $numero;
    $factorialarray = array();
    for ($i = 0; $i <= $maxtable; $i++) {
        $index[] = $i;
        $factorialarray[] = calcularFactorial($i);
    }

    echo "<table class='table table-striped table-hover table-bordered w-auto'>";

    echo "<tr>";
    echo "<th>Valor</th>";
    
    echo "<th>Factorial</th>";
    echo "</tr>";

    foreach ($factorialarray as $index => $valor) {

        echo "<tr>";
        echo "<td>$index</td>";
        
        echo "<td>$valor</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>