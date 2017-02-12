<?php
	// run php
	// php -S localhost:port
	$name = "Jean";
	$age = 19;

	echo 'Hello $name <br>';
	// with double quotes we can see variables
	echo "Hello {$name} <br>"; // same echo "Hello $name";
	// concatenation
	echo "Hello " . $name . " You Have " . $age . " Years Old";
?>