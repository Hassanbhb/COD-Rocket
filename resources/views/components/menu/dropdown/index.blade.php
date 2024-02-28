@props(['id'])

<ul id="{{ $id }}" {{ $attributes->merge(["class" => "overflow-hidden z-10 text-left border hidden bg-white p-1 rounded-lg shadow w-44 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"]) }}>
	{{ $slot }}
</ul>