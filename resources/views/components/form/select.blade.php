@props(['label', 'size' => 'md'])

@php
	$selectWireModel = $attributes->whereStartsWith('wire:model')->first();
	$selectErrorClasses = $errors->has($selectWireModel) ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red' : '';
	$selectSizeClasses = match($size) {
		'lg' => 'p-3 text-sm',
		'sm' => 'p-2 text-xs',
		'xs' => 'p-1 text-xs',
		default => 'p-2.5 text-sm'
	}
@endphp

<fieldset>
	@isset($label)
		@php $id = str_slug($label) @endphp
		<label for="{{ $id }}" class="flex items-center mb-2 text-xs font-medium text-gray-900 dark:text-white">
			{{ __($label) }} @if($attributes->has('required')) <small class="ml-auto text-gray-500 dark:text-gray-400">{{ __('Required') }}</small> @endif
		</label>
	@endisset

	<select @isset($id) id="{{ $id }}" @endisset {{ $attributes->merge([
		"class" => "bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary focus:border-primary block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary $selectErrorClasses $selectSizeClasses"
	]) }}>
		{{ $slot }}
	</select>

	@error($selectWireModel)
		<span class="block text-red-500 mt-2 text-xs">{{ $message }}</span>
	@enderror
</fieldset>