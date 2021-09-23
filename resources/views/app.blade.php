<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		{{-- <title>{{ $title }}</title> --}}
		<title>title sample</title>
        
		
		<!-- Styles -->
		<link href="{{ mix('css/swiper-bundle.css') }}" rel="stylesheet">
		<link href="{{ mix('css/app.css') }}" rel="stylesheet">
		
		<!-- Scripts -->
		@stack('header-scripts')
		

	</head>
	<body class="Nyxzar font-sans antialiased" id="body">
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

		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="{{ mix('js/app.js') }}"></script>

		@stack('scripts')
	</body>
</html>
