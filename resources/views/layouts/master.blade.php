<!DOCTYPE html>
<html>
<head>
	<title>InnFact | Forum</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			{{ link_to_route('root','InnFact',null,array('class' => 'navbar-brand')) }}
		</div>
		<ul class="navbar-nav nav navbar-right">
			@if(\Auth::check())
				<li>{{ link_to_route('questions.create', 'Ask') }}</li>
				<li><a href="/myQuestions">Logged in as {{ \Auth::user()->name }}</a></li>
				<li>{{ link_to_route('logout', 'Log Out') }}</li>
			@else
				<li>{{ link_to_route('signup','Sign Up')}}</li>
				<li>{{ link_to_route('login','Sign In')}}</li>
			@endif
		</ul>
	</div>
</nav>
<div class="container">
	@yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>
