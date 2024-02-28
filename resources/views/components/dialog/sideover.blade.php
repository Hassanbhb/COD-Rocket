@props(['id', 'title', 'size' => 'md:max-w-sm'])

<aside id="{{ $id }}" class="fixed shadow-lg top-0 flex flex-col w-full right-0 !z-50 h-screen transition-transform translate-x-full bg-white dark:bg-gray-800 {{ $size }}" tabindex="-1" aria-labelledby="drawer-right-label">
	<header class="border-b flex items-center px-6 py-4 border-gray-300 dark:border-gray-600">
		<h5 id="drawer-right-label" class="inline-flex items-center text-base font-semibold text-gray-500 dark:text-gray-300">
			{{ $title }}
		</h5>
		<button type="button" data-drawer-hide="{{ $id }}" aria-controls="{{ $id }}" class="text-gray-400 bg-transparent text-sm w-8 h-8 absolute top-2.5 end-2.5">
			<x-ui.icon name="x-mark" />
		</button>
	</header>

	<div class="flex-1 p-6 overflow-y-auto text-gray-800 bg-gray-50 dark:bg-gray-700">
		<div class="{{ $attributes->get('class') }}">
			{{ $slot }}
		</div>
	</div>

	@isset($footer)
		<footer class="flex w-full gap-4 items-center justify-end px-6 py-4 border-t border-gray-300 dark:border-gray-600">
			<x-ui.button data-drawer-hide="{{ $id }}" aria-controls="{{ $id }}" style="mute" class="flex-1">{{ __('Cancel') }}</x-ui.button>
			@isset($footer) {{ $footer }} @endisset
		</footer>
	@endisset
</aside>
