<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container bg-info">
    <div class="container bg-white rounded-4 p-5 my-4 border">
    <h2>Calculadora de Factorial</h2>
    <div class="container bg-gray rounded-4 p-3 my-4 border">
    <?php include "factorial.php"?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="numero">Ingrese un número para calcular su factorial:</label><br/><br/>
        <input type="number" placeholder="Aqui va un numero bb" id="numero" name="numero" required>
        <button type="submit">Calcular Factorial</button>
    </form>
    <div id="resultado" class="container bg-grey rounded-4 my-3 p-2 border">
        <h5>n! =  
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            echo "<span>" . calcularFactorial($numero) . "</span>";
        }?>
        </h5>
    </div>
    </div>
    <pre>
    <h5><strong>Factorial Formulas</strong></h5>
The formula to calculate a factorial for a number is:
n! = n × (n-1) × (n-2) × … × 1

Thus, the factorial n! is equal to n times n minus 1, times n minus 2, continuing until the
number 1 is reached.

The factorial of zero is 1:
0! = 1

<h5><strong>Recurrence Relation</strong></h5>
And the formula expressed using the recurrence relation looks like this:
n! = n × (n – 1)!

So the factorial n! is equal to the number n times the factorial of n minus one. This recurses
until n is equal to 0.

<h5><strong>Factorial Table</strong></h5>
The table below shows the factorial n! for the numbers one to one-hundred.
    </pre>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo factorialtable($numero);
        }
        else {
            echo factorialtable();
        } ?>
    </div>
</body>
</html>
