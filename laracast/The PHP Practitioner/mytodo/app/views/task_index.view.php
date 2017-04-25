<?php require('partials/head.php'); ?>
<h1>Todo Tasks</h1>
<?php foreach($tasks as $task) : ?>
	<p> <?= $task["description"] ?></p>
<?php endforeach; ?>
<?php require('partials/footer.php'); ?>