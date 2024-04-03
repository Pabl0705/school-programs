<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPONENT CALCULATOR</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container bg-info">
    <div class="container bg-white rounded-4 p-5 my-4 border">
    <h2>Exponent Calculator</h2>
    <div class="container bg-gray rounded-4 p-3 my-4 border">
    <?php include "exponent.php"?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="x">x = </label>
        <input type="text" placeholder="Aqui va un numero bb" id="x" name="x" required> <br/><br/>
        <label for="n">n = </label>
        <input type="text" placeholder="Aqui va un numero bb" id="n" name="n" required> <br/><br/>
        <button type="submit">Calculate</button>
    </form>
    <div id="resultado" class="container bg-grey rounded-4 my-3 p-2 border">
        <h5>x<sup>n</sup>=  
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            echo "<span>" . calcularExponent($x, $n) . "</span>";
        }?>
        </h5>
    </div>
    </div>
    <p>
<strong><h5>Positive exponent</strong></h5>
Exponentiation is a mathematical operation, written as xn, involving the base x and an
exponent n. In the case where n is a positive integer, exponentiation corresponds to
repeated multiplication of the base, n times.<br/><br/>

<h4>\(x^n = x * x * .... * x\)</h4><br/>

The calculator above accepts negative bases, but does not compute imaginary numbers. It
also does not accept fractions, but can be used to compute fractional exponents, as long
as the exponents are input in their decimal form.<br/><br/>

<strong><h5>Negative exponent</strong></h5>
When an exponent is negative, the negative sign is removed by reciprocating the base and
raising it to the positive exponent.<br/><br/>

<h4>\(x^n = {1 \over x * x * .... * x}\)</h4><br/>

<strong><h5>Exponent 0</strong></h5>
When an exponent is 0, any number raised to the 0 power is 1.
For 0 raised to the 0 power the answer is 1 however this is considered a definition and not
an actual calculation. <br/><br/>

<h4>\(x^n = 1\)</h4><br/>

<strong><h5>Real number exponent</strong></h5>
For real numbers, we use the PHP function pow(n,x)
    </p>
    </div>
</body>
</html>