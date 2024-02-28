@props(['label', 'style' => 'primary'])

@php 
	$id = $attributes->get('id');
	$checkboxClasses = match($style) {
		'primary' => 'checked:!bg-primary focus:ring-primary dark:focus:ring-primary',
		'secondary' => 'checked:!bg-secondary focus:ring-secondary dark:focus:ring-secondary',
		default => 'checked:!bg-primary focus:ring-primary dark:focus:ring-primary'
	}
@endphp

<fieldset class="flex">
    <div class="flex items-center h-5">
        <input id="{{ $id }}" aria-describedby="{{ $id }}-text" type="checkbox" {{ $attributes->merge([
			"class" => "w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 focus:ring-offset-2 $checkboxClasses" 
		]) }}>
    </div>

	@isset($label)
    	<div class="ms-2 text-sm">
	        <label for="{{ $id }}" class="font-medium text-xs text-gray-900 dark:text-gray-300">{{ __($label) }}</label>
			
			@isset($hint)
	        	<p id="{{ $id }}-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">{{ $hint }}</p>
			@endisset
		</div>
	@endisset
</fieldset>
