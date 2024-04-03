<?php

function validate($data)
    {
        if (is_numeric($data)) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taxedprice = validate($_POST["taxedprice"]);
    $tax = validate($_POST["tax"]);


}
?>