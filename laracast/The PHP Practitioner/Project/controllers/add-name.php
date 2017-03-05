<?php
	
	// those are asocciative arrays
	// ALL REQUEST, NO MATTER GET O POST
	//var_dump($_REQUEST);

	App::get('database')->insert('users',[
			'name' => $_POST['name']
		]);

	// redirect to main
	header('Location: /');
?>