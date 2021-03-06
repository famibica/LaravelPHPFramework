<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'My First Webpage!')</title>
	</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<body>
		<div class="container" style="margin-top: 1em;">
			@yield('content')
			<br>
			<aside class="menu">
				<p class="menu-label">Menu</p>
				<ul class="menu-list">
					<li><a href="/">Home</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/projects">List of Projects</a></li>
					<li><a href="/projects/create">Create Project</a></li>
			</aside>
		</div>
	</body>
</html>