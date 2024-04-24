<?php
require_once ("Pokemon.php");
require_once ("Pokemons.php");

$pokemons = new Pokemons();

$url = "http://joanseculi.com/json/pokemons.json"; // ruta al archivo JSON
$data = file_get_contents($url);
$object = json_decode($data);

foreach ($object->pokemons as $pokemon) {
    $pokemon = new Pokemon(
    /* Code */
    $pokemon->Code, 
    /* Nombre */
    $pokemon->Name, 
    /* Tipo 1 */
    $pokemon->Type1, 
    /* Tipo 2 */
    $pokemon->Type2, 
    /* Puntos de Salud */
    $pokemon->HealthPoints, 
    /* Ataque */
    $pokemon->Attack, 
    /* Defensa */
    $pokemon->Defense, 
    /* Velocidad */
    $pokemon->Speed, 
    /* Defensa Especial */
    $pokemon->SpecialDefense, 
    /* Ataque Especial */
    $pokemon->SpecialAttack, 
    /* Generación */
    $pokemon->Generation, 
    /* ¿Es legendario? */
    $pokemon->Legendary, 
    /* Imagen */
    $pokemon->Image );

    $pokemons->add_pokemon($pokemon);
}

echo "<h1>MASTER POKEDEX</h1>";
echo "<div>";

echo "<form name='filtrar' method='POST'  >";
echo "Select your option: ";
echo "<select execute='get_generations(this.value)'>";
echo "<option value='1'>First Generation</option>";
echo "<option value='2'>Second Generation</option>";
echo "<option value='3'>Third Generation</option>";
echo "<option value='4'>Fourth Generation</option>";
echo "<option value='5'>Fifth Generation</option>";
echo "<option value='6'>Sixth Generation</option>";
echo "</select>";
echo "</form>";
echo "</div>";


echo "<table>";
echo "<th>";
echo "<td>Image</td>";
echo "<td>Pokedex Number</td>";
echo "<td>Name</td>";
echo "<td>Type 1</td>";
echo "<td>Type 2</td>";
echo "<td>HP</td>";
echo "<td>ATK</td>";
echo "<td>DEF</td>";
echo "<td>SPEED</td>";
echo "<td>SP_ATK</td>";
echo "<td>SP_DEF</td>";
echo "<td>Generation</td>";
echo "<td>Legendary?</td>";
echo "<td>Total</td>";
echo "</th>";

foreach ($pokemons->get_pokemons() as $poke) {
    echo "<tr>";
    echo "<td>";
    echo "<img src='" . $poke -> get_image() ."'>";
    echo "</td>";
    echo "<td>";
    echo $poke -> get_code();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_name();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_type1();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_type2();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_healthPoints();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_attack();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_defense();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_speed();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_specialAttack();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_specialDefense();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_generation();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_legendary();
    echo "</td>";
    echo "<td>";
    echo $poke -> get_total();
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

