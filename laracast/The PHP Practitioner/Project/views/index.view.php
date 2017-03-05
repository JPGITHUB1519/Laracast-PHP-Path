<?php require('partials/head.php'); ?> 

<h1>Add a New Task</h1>

<form method="POST" action="/tasks">
	<label for="description">Description</label>
	<input type="text" name="description">
	<button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?> 
