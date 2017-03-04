<?php
	require 'functions.php';
	$age = 20;
	if(access($age))
	{
		$animals = ["dog", "cat"];
		dd($animals);
		require "index.view.php";
	}
?>