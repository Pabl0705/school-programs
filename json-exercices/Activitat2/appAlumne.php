<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS NET</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php

$url = "https://www.thesportsdb.com/api/v1/json/3/all_countries.php"; // path to JSON file
$data = file_get_contents($url);
$countries = json_decode($data, true);

echo "<div class='container mt-4 p-1'>";
echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='post'>";
echo "<div class='row'>";

echo "<div class='col-12'>";
echo "<label for='country' class='col-form-label'>Country</label>";

echo "</div>";
echo "</div>";

echo "<div class='row'>";
echo "<div class='col-6'>";

echo "<select class='form-select form-select-sm' name='country'>"; // Added name attribute to select element

foreach ($countries['countries'] as $country) {
  $selected = ($_POST['country'] ?? '') === $country['name_en'] ? 'selected' : ''; // Verifica si esta opción es la seleccionada
  echo "<option value='" . $country['name_en'] . "' $selected>" . $country['name_en'] . "</option>";
}
echo "</select>";
echo "</div>";
echo "<div class='col-6'>";
echo "<input name=execute class='btn btn-primary' type='submit' value='Search'/>";
echo "</div>";
echo "</div>";
echo "</form>";
echo "</div>";

if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['execute'])){

  execute($_POST['country']);

}
function execute($country)
{
  $url = "https://www.thesportsdb.com/api/v1/json/3/search_all_leagues.php?c=" . $country; // ruta al archivo JSON
  $data = file_get_contents($url);
  $leagues = json_decode($data);

  if (isset($leagues->countries)) {
  

  echo "<table class='table table-striped table-bordered'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Flag</th>";
  echo "<th>Title</th>";
  echo "<th>Website</th>";
  echo "<th>Image</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  foreach ($leagues->countries as $league) {
    echo "<tr>";
    echo "<td><img class='w-50 h-50 img-fluid' src='" . (isset($league->strBadge) ? $league->strBadge : "") . "'></td>";
    echo "<td>" . (isset($league->strLeague) ? $league->strLeague : "") . "</td>";
    echo "<td><a href='" . (isset($league->strWebsite) ? $league->strWebsite : "") . "'>" . (isset($league->strWebsite) ? $league->strWebsite : "") . "</td>";
    echo "<td>";
    echo "<a href='" . (isset($league->strFanart1) ? $league->strFanart1 : "") . "'>";
    echo "<img class='w-50 h-50 img-fluid' src='" . (isset($league->strFanart1) ? $league->strFanart1 : "") . "'>";
    echo "</a>";
    echo "</td>";

    echo "</tr>";
    echo "<tr>";
    echo "<td colspan='4'>" . (isset($league->strDescriptionEN) ? $league->strDescriptionEN : "") . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

}

else {
  echo " <strong>-X-X-X- NO LEAGUES WERE FOUND FOR THIS COUNTRY -X-X-X-</strong>";
}
}
