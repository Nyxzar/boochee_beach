<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		{{-- <title>{{ $title }}</title> --}}
		<title>title sample</title>
        
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">


		<!-- Styles -->
		<link href="{{ mix('css/app.css') }}" rel="stylesheet">
		
		<!-- Scripts -->
		@stack('header-scripts')
		

	</head>
	<body class="font-sans antialiased" id="body">
		<div >	
			<header class="relative">
				<x-navigation></x-navigation>
			</header>

			<main>
				{{ $slot }}
			</main>

			<footer data-scroll-section>
				<x-footer></x-footer>
			</footer>
		</div>


    <script src="{{ mix('js/app.js') }}"></script>

		@stack('scripts')
	</body>
</html>
