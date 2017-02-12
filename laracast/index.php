<?php
	// associative array
	$person = [
		"name" => "jean",
		"age" => "19",
		"career" => "Scrum Team Member"
	];

	// add key / value to dictionary
	$person["birthdate"] = 1998; 

	// delete from array
	unset($person["age"]);

	// print array on screen
	var_dump($person);
	echo "<br>";
	// show formatted
	print_r($person);

	// die print the message and exit the script
	die("Print and exit the Script");
	require "index.view.php";
?>