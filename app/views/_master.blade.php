<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Ultimate Reference (Frisbee)')</title>
	<meta charset='utf-8'>

	@yield('head')


</head>

<body>
	<div id="header">
		<h1>Ultimate Reference: Frisbee Statistics</h1>
	</div>
	<nav>
		<ul>
			<li><a href='/team/create'>Add Team</a></li>
			<li><a href='/player/create'>Add Player</a></li>
		</ul>
	</nav>

	@yield('content')

	@yield('body')

</body>
</html>
