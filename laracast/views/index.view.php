<?php require('partials/head.php'); ?> 
<header>
	<h1>Task List </h1>
</header>
<!-- including reusable portion of html -->
<ul class="list-style: none;">
	<?php foreach($tasks as $task) :?>
		<?php if($task->completed) :?>
			<li><strike><?= $task->description; ?></strike></li>
		<?php else: ?>
			<li><?= $task->description; ?></li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>
<?php require('partials/footer.php'); ?> 
