@props(['path', 'icon'])

<span class="inline-block mx-3 first-of-type:hidden">
	<x-heroicon-o-chevron-double-right class="w-4 text-gray-400" />
</span>

<a class="flex items-center text-sm [&:last-of-type>.icon]:text-secondary [&:last-of-type>span]:font-medium [&:last-of-type>span]:text-secondary" href="{{ isset($path) ? route($path) : '#' }}">
	<x-ui.icon :name="$icon" class="text-gray-400 dark:text-gray-600 icon mr-2" />
	<span class="text-gray-500 first-letter:uppercase">{{ $slot }}</span>
</a>