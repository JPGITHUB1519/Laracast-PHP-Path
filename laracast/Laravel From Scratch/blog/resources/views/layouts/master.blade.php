<!DOCTYPE html>
<html>
<head>
	<title>My Application</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
	@include('layouts/nav')
	<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
	</div>
	<div class="container">
		<div class="row">
			@yield('content')
			@include('layouts/sidebar')
		</div>
	</div>
	@include('layouts/footer')
	@yield('footer')
</body>
</html>