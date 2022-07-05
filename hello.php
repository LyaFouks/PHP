<?php 

$colors =  array ("red", "orange", "blue", "green");
$colors[] = "yellow";
print_r($colors);

echo $colors[1];

echo "<br>";

$names[0] = "Jane";
$names[1] = "Jim";
$names[5] = "Jack";
$names["name"] = "Joan";

unset($names[5]);
echo sizeof($names);

print_r($names);

echo "<br>";

echo $names["name"];

$years["Jane"] = 1999;
$years["Jim"] = 1979;
$years["Jack"] = 2001;

echo "<br>";

print_r($years);

?>