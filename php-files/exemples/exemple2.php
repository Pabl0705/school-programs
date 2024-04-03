<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Document</title>
    </head>
<body>

<?php
    $h1 = "Fckin page TITLE, JORDI WIIIIIIILLDDD";
    $txt = "<h1>$h1</h1>"; 
    $txt .= "<h2>Double header baby</h2>";
    echo $txt;

    $p = "Soy la mexicana con tremendo flow";
    echo "<p>$p</p>";

    function JordiWildFunction() {
        // global $div;
        $div = "Yow this is my div";
        echo "<div>$div</div>";
    }

    function SusanyFunction() {
        static $i = 0;
        echo $i . "<br />";
        $i++;
    }

JordiWildFunction();
// echo $div;

echo "<br/>GLOBAL:<br/>";
echo $GLOBALS["h1"];
echo $GLOBALS["txt"];
// echo $GLOBALS["div"];

echo "<br />";
SusanyFunction();
SusanyFunction();
SusanyFunction();

if(isset($h1)) {
    echo "\$i exists" . "<br />";
}
else {
    echo "\$i does not exist" . "<br />";
}

$y = 100;
$f = 20.56;
$t = "Text CATEDRAAALICIIIOOOO";
$b = true;

$result = sprintf("This is the result: %d, %.2f, %s, %b", $y, $f, $t, $b);

echo "<br /><br />" . $result;

echo "{$y} {$b}";

function add($x1, $x2)
{
    return  $x1 + $x2;
}

add(4,6);
?>

</body>
</html>