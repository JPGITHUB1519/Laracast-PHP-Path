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
		<?php if($task["extra"]) :?>
			<h2>Extra Task</h2>
		<?php else : ?>
			<h2>No Extra Task</h2>
		<?php endif;?>
		<li>
			<strong>Title : </strong>
			<span class="little-space-left"><?= $task["title"] ?></span>
		</li>
		<li>
			<strong>Due : </strong>
			<span class="little-space-left"><?= $task["due"]?></span>
		</li>
		<li>
			<strong>Assignet To : </strong>
			<span class="little-space-left"><?= $task["assigned_to"]?></span>
		</li>
		<li>
			<strong>Status : </strong>
			<?php if($task["completed"]) :?>
				<span class="icon">Complete</span>
			<?php else : ?>
				<span class="icon">Incomplete</span>
			<?php endif; ?>
		</li>
	</ul>
	
</body>
</html>