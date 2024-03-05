@props(['label', 'id', 'size' => 'md'])

@php
	$inputWireModel = $attributes->whereStartsWith('wire:model')->first();
	$inputErrorClasses = $errors->has($inputWireModel) ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red' : '';
	$inputSizeClasses = match($size) {
		'lg' => 'p-3 px-5 text-sm',
		'sm' => 'p-2 px-4.5 text-xs',
		'xs' => 'p-1 px-2 text-xs',
		default => ' px-4 py-2.5 text-sm'
	}
@endphp

<fieldset>
	@isset($label)
		@php $id = str_slug($label) @endphp
		<label for="{{ $id }}" class="flex items-center mb-2 text-xs font-medium text-gray-900 dark:text-white">
			{{ __($label) }} @if($attributes->has('required')) <small class="ml-auto text-gray-500 dark:text-gray-400">{{ __('Required') }}</small> @endif
		</label>
	@endisset

	<div class="relative [&:has(.prefix)>input]:ps-10 [&:has(.suffix)>input]:pe-14">
		@isset($prefix)
			<div class="prefix absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
				{{ $prefix }}
			</div>
		@endisset

		<input @isset($id) id="{{ $id }}" @endisset {{ $attributes->merge([
			"type" => "text",
			"class" => "bg-gray-50 disabled:cursor-not-allowed border border-gray-300 text-gray-900 rounded-lg focus:ouline-none focus:ring-primary focus:border-primary block w-full placeholder-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary $inputErrorClasses $inputSizeClasses"
		]) }}/>

		@isset($suffix)
			<div class="suffix absolute inset-y-0 end-0 text-sm flex items-center pe-3.5 pointer-events-none">
				<div class="border-l border-gray-300 ps-3">
					{{ $suffix }}
				</div>
			</div>
		@endisset
	</div>

	@error($inputWireModel)
		<span class="block text-red-500 mt-2 text-xs">{{ $message }}</span>
	@enderror
</fieldset>