@props(['name', 'type' => 'o'])

@php $icon = "heroicon-$type-$name" @endphp
<x-dynamic-component :component="$icon" {{ $attributes->merge(['class' => 'w-5 aspect-ratio cursor-pointer']) }} />