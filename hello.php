<?php 

$colors = array("red", "orange", "green", "blue", "yellow", "indigo", "violet");


foreach ($colors as $key => $value) {
	$colors[$key] = $value." color";
	echo $key." ".$value." ";
}


echo"<br><br>";

for($i = 0; $i < sizeof($colors); $i++) {
	echo $colors[$i]."<br>";
}

?>