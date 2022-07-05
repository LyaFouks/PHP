<?php 

$userName = "Joe";
$userAge = 20;
$isUserLogin = true;

if($isUserLogin || $userAge > 18) {
	echo "Hello ".$userName;
} else {
	echo "You have to login and you have to be older than 18";
}

?>