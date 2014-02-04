<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FFXIV: A Realm Redesigned</title>
	</head>
	<body>
		@include('layout.logo')
		@include('layout.nav')
		<section>
			<div id="content">
				@yield('content')
			</div>
		</section>
	</body>
</html>