<?php 

$loginPasswordArray = array(
	"coolDaddy" => "11111",
	"Jane" => "22222"

);

$isLoginPasswordCorrect = false;

if (isset($_POST["login"]) && isset($_POST["password"])) {
	
	foreach ($loginPasswordArray as $key => $value) {
		if ($key == $_POST["login"] && $value == $_POST["password"]) {
			$isLoginPasswordCorrect = true;
			

		} 

	}
	if ($isLoginPasswordCorrect) {
		echo "Hello ".$_POST["login"]."!";
	} else {
		echo "Please input correct login and password.";
	}

}
?>

<p>Input your login and password</p>

<form method="post">
	

	<p><input type="text" name="login"></p>
	<p><input type="password" name="password"></p>
	<p><input type="submit" name=""></p>

</form>
