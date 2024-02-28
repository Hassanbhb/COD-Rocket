@props(['icon', 'title'])

<div {{ $attributes->merge(["class" => "text-center border rounded-lg py-10"]) }}>
	@isset($icon) <x-ui.icon class="mx-auto h-12 w-12 text-gray-400" :name="$icon"/> @endisset
	<h3 class="mt-2 text-sm font-semibold text-gray-900">{{ __($title) }}</h3>
	<div class="space-y-8">{{ $slot }}</div>
</div>
  