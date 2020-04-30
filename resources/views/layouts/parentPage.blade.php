<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@stack('title')</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css">

    </head>
    <body>
	
	@include('partials.navbar')
	
		<div class="container">
			@include('partials.messages')
			@yield('content')
		</div>

    </body>
</html>
