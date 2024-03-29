@props(['style' => 'default'])
@php
	$badgeClasses = match($style) {
		'success' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
		'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
		'default' => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
		'error' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
		'info' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
	};
@endphp

<span {{ $attributes->merge(["class" => "w-max text-xxs font-medium px-2.5 py-0.5 rounded-full $badgeClasses"]) }}>
	{{ $slot }}
</span>

