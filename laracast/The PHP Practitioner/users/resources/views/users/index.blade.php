<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>All Users</h1>
	@foreach($users as $user)
		<li>{{ $user->name }}</li>
	@endforeach

	<form method="post" action="/users">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="Name" required>
		<input type="text" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<button type="submit">Submit</button>
	</form>
</body>
</html>