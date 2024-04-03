<?php
function calcularExponent($base,$exp){
    $resultado = 1;
    if (!is_numeric($base) || !is_numeric($exp)) {
        return "Error: Ambos la base y el exponente deben ser números.";
    }
    elseif (is_float($exp)){
        $resultado = pow($base, $exp);
    }
    elseif ($exp > 0) {
        for ($i = 0; $i < $exp; $i++){
            $resultado *= $base;
        }
    }
    else {
        for ($i = 0; $i > $exp; $i--){
            $resultado *= $base;
        }
        $resultado = 1/$resultado;
    }
    return $resultado;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = validate($_POST["x"]);
    $n = validate($_POST["n"]);
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
