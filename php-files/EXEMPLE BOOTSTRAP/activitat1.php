<?php
$ventas = array(
    "Playstation 2" => 155,
    "Nintendo DS" => 154,
    "Game Boy" => 119,
    "Play Station 4" => 102,
    "Wii" => 101,
    "Play Station 3" => 87,
    "Xbox 360" => 84,
    "Play Station Portable" => 300,
    "Game Boy Advance" => 81,
    "Nintendo 3DS" => 72,
    "Nes" => 62,
    "Nintendo Switch" => 60
);

echo "<h1>VIDEO GAMES CONSOLES</h1>";
echo "<h2>Best Selling Video Games Consoles 1983 - 2024</h2>";
echo "<table>";
arsort($ventas);

foreach ($ventas as $consola => $venta) {
    echo '<div>';
    echo '<tr>';
    echo '<td><span>' . $consola . '</span></td>';
    echo '<td>';
    for ($x = 0; $x <= $venta; $x++) {
    
        echo '<img src="green.png"/>';
    }
    echo '<span>' . $venta . '</span>' . " Millions";
    echo '</td>';
    echo '</tr>';
    echo '</div>';
}
echo '</table>';
