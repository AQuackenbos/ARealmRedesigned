<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FFXIV: A Realm Redesigned</title>
		
		<link type="text/css" rel="stylesheet" href="/scripts/jmenu/css/jmenu.css" media="all"/>
		<link type="text/css" rel="stylesheet" href="/scripts/fss/css/style.css" media="all"/>
		
		<link type="text/css" rel="stylesheet" href="/scripts/core.css" media="all"/>
		
		<script type="text/javascript" src="/scripts/jquery/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="/scripts/jquery/ui/ui/minified/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/scripts/jmenu/js/jMenu.jquery.min.js"></script>
		<script type="text/javascript" src="/scripts/fss/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="/scripts/fss/js/modernizr.custom.79639.js"></script>
		<script type="text/javascript" src="/scripts/fss/js/jquery.slitslider.js"></script>
		
		<script type="text/javascript" src="/scripts/core.js"></script>
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