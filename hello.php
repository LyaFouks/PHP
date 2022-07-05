<?php 

$x = 7;
$i = 1;

while ($i <= 10) {
	$y = $x * $i;
	echo $y."<br>";

	$i++;
}

$colors = array("red", "orange", "green", "blue", "yellow", "indigo", "violet");

$j = 0;

while ($j < sizeof($colors)) {
	echo $colors[$j]."<br>";

	$j++;

}

?>