<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>@yield('titolo')</title>
</head>

<body>
	<div class="container">
	<header class="mb-4">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Comic Storage</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"> </span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
						<a class="nav-link {{url()->current() == route('comic.index') ? 'text-primary' : ''}}" href="{{route('comic.index')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link {{url()->current() == route('comic.create') ? 'text-primary' : ''}}" href="{{route('comic.create')}}">Add Comics</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		
			@yield('main')
		
	</main>


	<footer></footer>
	</div>	
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>