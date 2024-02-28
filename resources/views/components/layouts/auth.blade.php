<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>@yield('title') - {{ config('app.name') }}</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('styles/app.css?v=' . time()) }}">
		
		@livewireStyles
        @livewireScriptConfig
	</head>

	<body class="antialiased bg-gray-100 text-gray-800 dark:text-gray-100 dark:bg-gray-700 font-body">
		<div class="absolute top-0 lg:-top-20 inset-x-0 -z-10">
			<div class="bg-primary block h-96"></div>
			<svg viewBox="0 0 1280 77"><defs><clipPath><rect width="1280" height="77"/></clipPath></defs><g clip-path="url(#_clipPath_2tCocFngOMTjoZ1emAjuxyo4cker5VIe)"><path d=" M 0 0 L 0 14.086 C 206.968 55.354 420.976 77 640 77 C 859.024 77 1073.032 55.354 1280 14.086 L 1280 0 L 0 0 Z " fill="rgb(121,46,136)"/></g></svg>
		</div>

		<div class="flex flex-col items-center px-5 md:px-auto">
			<header class="container relative">
				<button data-dropdown-toggle="choose-language" class="absolute top-6 right-3 bg-white/20 text-white rounded-md py-2 px-3 text-xs flex items-center gap-3">
					<span>English</span>
					<x-ui.icon name="chevron-down" class="!w-3"/>

					<x-menu.dropdown class="text-gray-800 w-32 !-left-4" id="choose-language">
						<x-menu.dropdown.item>English</x-menu.dropdown.item>
						<x-menu.dropdown.item>العربية</x-menu.dropdown.item>
					</x-menu.dropdown>
				</button>

				<x-logo class="h-8 mx-auto mt-32 !text-white" />

				<div class="sm:mx-auto sm:w-full sm:max-w-md mt-3 mb-16">
					<h2 class="text-2xl md:text-3xl font-extrabold text-center text-white leading-9">
						@yield('title')
					</h2>
				
					<p class="mt-2 text-sm text-center leading-5 max-w font-medium mx-auto text-white text-opacity-70 hover:text-opacity-100 w-max">
						@yield('sub-heading')
					</p>
				</div>
			</header>

			<main class="w-full sm:max-w-md mb-8">
				{{ $slot }}
			</main>

			<footer class="md:absolute bottom-6 mb-5">
				<p class="flex items-center text-xs gap-2 font-normal">
					<span>{{ __('Designed & developed by') }}</span>
					<a href="https://technopek.ma/" target="_blank">
						<img class="w-full h-5" src="http://technopek.ma/wp-content/uploads/2023/01/logo-07.svg" alt="Technopek logo">
					</a>
				</p>
			</footer>
		</div>
	
        <script src="{{ asset('scripts/app.js') }}"></script>
	</body>
</html>