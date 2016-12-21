
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hang board</title>

	<style>
		body {
			width: 960px;
			text-align: left;
			margin-left: auto;
			margin-right: auto;
		}
		.headerNav{
			width:960px;
			margin:0 auto;
			background-color: black;
		}
		.headerNav:after {
			content: "";
			clear: both;
			display: block;
		}
		.headerNav li{
			float:left;
			width:140px;
		}
		.headerNav a{
			display:block;
			line-height:70px;
			height:70px;
			text-align:center;
			background:#000;
			color:#fff;
			border-right:1px solid red;
		}
		.headerNav li:first-child a{
			border-left:1px solid red;
		}

	</style>
</head>
<body>
<div id="main">
<header>
	<ul class="headerNav">
		<li><a href="/">Home</a></li>
		@if (Auth::guest())
			<li><a href="/auth/login">login</a></li>
			<li><a href="/auth/register">Register</a></li>
		@else
			<li><a href="/articles/create">post</a></li>
			<li><a href="/auth/logout">Logout</a></li>
		@endif
	</ul>
	@if (!Auth::guest())
		<h1>Hello! {{ Auth::user()->name }}</h1>
	@endif
	
</header>
	@yield('header')

	@if(Session::has('flash_message'))
		{{ Session::get('flash_message')}}
	@endif

	<hr size="5">

	@yield('content')
</div>
</body>
</html>
