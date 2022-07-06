<?php 

	if(isset($_GET["number"])) {
    	$value = $_GET['number'];

		if(floor($value) == $value && is_numeric($value)) {

		if ($value % 2) {
		  echo $value.' is odd';
		} else {
		  echo $value.' is even';
		}
		
		} else {
			echo("Input the whole number.");
}
	

	}

	

?>

<p>Input whole number</p>

<form>
	
	<input type="text" name="number">
	<input type="submit" name="">

</form>
