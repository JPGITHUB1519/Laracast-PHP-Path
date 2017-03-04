<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		header
		{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}

		.little-space-left
		{
			margin-left :20px;
		}
	</style>
</head>
<body>
	<header>
		<h1>Task List </h1>
	</header>
	<ul class="list-style: none;">
		<?php foreach($tasks as $task) :?>
			<?php if($task->completed) :?>
				<li><strike><?= $task->description; ?></strike></li>
			<?php else: ?>
				<li><?= $task->description; ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
	
</body>
</html>