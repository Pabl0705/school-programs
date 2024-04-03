<?php 

echo '<p align="center"><iframe width="700" height="380" src="https://www.youtube.com/embed/pOSxodms64w?si=K2YLo--NRHNguzea" 
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
    clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    allowfullscreen></iframe></p>';

echo "<div class='container container-sm'>";
echo "<table class='table table-striped table-bordered table-sm'>";
echo "<tr>";
echo "<th>Graus</th>";
echo "<th>Radians</th>";
echo "<th>Sinus</th>";
echo "<th>Cosinus</th>";
echo "</tr>";
for ($x = 0; $x <= 360; $x++) {
    echo "<tr>";
    $rads = deg2rad($x);
    $sin = round(sin($rads),4);
    $cos = round(cos($rads),4);
    echo "<td>$x</td>";
    echo "<td>" . round($rads, 4) . "</td>";
    if ($sin < 0) {
        echo "<td class=text-danger>" . $sin . "</td>";
    }
    else {
        echo "<td class=text-primary>" . $sin . "</td>";
    }
    if ($cos < 0) {
        echo "<td class=text-danger>" . $cos . "</td>";
    }
    else {
        echo "<td class=text-primary>" . $cos . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>"
?>