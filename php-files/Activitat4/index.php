<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Arrays Page</title>
</head>
<?php
// Define ERR values
$taxedpriceERR = $taxERR = "";
$correct_values = 0;
$taxedprice = "";
$tax = "";

?>
<body>
    <div>
        <h1>PRICE, TAX AND ROUNDS</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <label for="taxedprice">Price with taxes:</label><br/>
            <input type="text" name="taxedprice" value="<?php echo $taxedprice;?>">
            <span class="text text-danger">
                * <?php echo $taxedpriceERR;?>
            </span><br/><br/>

            <label for="tax">Taxes percentage:</label><br/>
            <input required type="text" name="tax" value="<?php echo $tax;?>">
            <span class="text text-danger">
                * <?php echo $taxERR;?>
            </span><br/><br/>
            <button type="submit" class="btn btn-primary">Calculate</button>

        </form>
    </div>
    <?php echo "<br/><h2>TAX DATA</h2>";
    if ($taxedprice != null && $tax != null ){
        $notaxprice = $taxedprice/(1+($tax/100));
        $roundprice = round($notaxprice,2);
    }
        echo "<br/>";
        echo "Price without tax: $notaxprice €<br/>"; 
        echo "Round to 2 decimals using round(): $roundprice €<br/>";
        echo "Using function sprintf():" . sprintf("%.4f", $roundprice) . " € <br/>";?>
    
</body>
</html>