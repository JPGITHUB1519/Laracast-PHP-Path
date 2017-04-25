<?php require('partials/head.php'); ?>
<div>
	<h1>Create New Task</h1>
	<form method="POST" action="/todos/store">
		<div>
			<label>ID</label>
			<input type="text" name="id">
		</div>
		<div>
			<label>Title</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Description</label>
			<input type="text" name="description">
		</div>
		<div>
			<label>Status</label>
			<input type="checkbox" name="status">
		</div>
		<button>Submit</button>
	</form>
</div>
<?php require('partials/footer.php'); ?>