<?php
	
	// those are asocciative arrays
	// ALL REQUEST, NO MATTER GET O POST
	//var_dump($_REQUEST);

	$app["database"]->insert('users',[
			'name' => $_POST['name']
		]);

	// redirect to main
	header('Location: /');
?>