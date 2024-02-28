@props(['label'])

@php
	$textareaWireModel = $attributes->whereStartsWith('wire:model')->first();
	$textareaErrorClasses = $errors->has($textareaWireModel) ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red' : ''
@endphp

<fieldset>
	@isset($label)
		@php $id = str_slug($label) @endphp
		<label for="{{ $id }}" class="flex items-center mb-2 text-xs font-medium text-gray-900">
			{{ __($label) }} @if($attributes->has('required')) <small class="ml-auto text-gray-500">{{ __('Required') }}</small> @endif
		</label>
	@endisset

	<textarea @isset($id) id="{{ $id }}" @endisset {{ $attributes->merge([
		"class" => "block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary $textareaErrorClasses"
	]) }}></textarea>

	@error($textareaWireModel)
		<span class="block text-red-500 mt-2 text-xs">{{ $message }}</span>
	@enderror
</fieldset>