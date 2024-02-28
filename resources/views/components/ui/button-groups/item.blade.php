@props(['active'])

@php $buttonActiveClasses = isset($active) ? 'text-white bg-secondary dark:bg-secondary' : 'bg-white dark:bg-gray-800 dark:text-white hover:text-secondary' @endphp

<button type="button" {{ $attributes->merge([
	"class" => "inline-flex gap-2 flex-1 items-center justify-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg focus:z-10 dark:border-gray-600 $buttonActiveClasses"
]) }}>{{ $slot }}</button>
