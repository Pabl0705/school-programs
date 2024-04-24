<?php

$age = array("Peter" => 35, "Ben" => 37,"Joe" => 43);

$json = json_encode($age);

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
//accessing to json

echo $json;
echo "<br>";

//accessing to objects
echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";
echo "<br>";


//Iterating $obj
$obj = json_decode($jsonobj);
foreach ($obj as $key => $value) {
    echo "[" . $key . ", " . $value . "]" . "<br>";
}
?>