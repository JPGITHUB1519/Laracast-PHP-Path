<?php
	$app["database"]->insertTask($_POST['description']);
	echo "Value Inserted Suscefully!";
?>