<!DOCTYPE html>
<html>
<head>
	<title>My Application</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
	@include('layouts/nav')
	<div class="container">
		
		@yield('content')
		
	</div>
	@include('layouts/footer')
	@yield('footer')
</body>
</html>