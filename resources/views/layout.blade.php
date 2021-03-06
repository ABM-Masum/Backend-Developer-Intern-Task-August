<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="/css/default.css" rel="stylesheet" />
	<link href="/css/fonts.css" rel="stylesheet" />

	@yield('head')

</head>
<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="/">home page</a></h1>
			</div>
			<div id="menu">
				<ul>
					@yield('link')
				</ul>
			</div>
		</div>
		@yield('header')
	</div>
	@yield('content')

	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved to <a href="http://www.theantopolis.com" rel="nofollow">antopolis</a>.</p>
	</div>
</body>
</html>