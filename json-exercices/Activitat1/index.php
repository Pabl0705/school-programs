<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPONENT CALCULATOR</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>3000+ Peaks</h1>
    <?php 

    $url = "https://api.jsonserve.com/Gk1Go7";
    $data = file_get_contents($url);
    $peaks = json_decode($data);

    foreach ($peaks as $peak) {
        echo "<div class='row bg-gray rounded-4 p-3 my-4 mx-3 border'>";
        echo "<div class='col-sm-2'>";
        echo "<img class='rounded img-thumbnail' src='{$peak->url}'/>";
        echo "</div>";
        echo "<div class='col-xxl-4'>";
        echo "<p class='h4 lh-lg'>";
        echo "<strong>Mountain name:</strong> $peak->name <br/>";
        echo "<strong>Height:</strong> $peak->height <br/>";
        echo "<strong>Prominence:</strong> $peak->prominence <br/>";
        echo "<strong>Zone:</strong> $peak->zone <br/>";
        echo "<strong>Country:</strong> $peak->country <br/>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
    }
    

    ?>



