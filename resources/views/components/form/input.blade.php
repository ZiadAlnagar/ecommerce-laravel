@props(['tag' => 'input', 'type' => 'text', 'self_closing' => true, 'name', 'content' => null, 'hidden' => false])
@php
$class = $hidden ? '' :
    "rounded text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-1";
$class .= (!$hidden && $type != 'checkbox') ? " w-full border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" : '';
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => $class]) }}
    type="{{ $type }}"
    name="{{ $name }}"
    @if (!$type == 'checkbox')
        required
    @endif
    value="{{ old($name) }}"
    @if ($type == 'checkbox')
        checked
    @endif
    {{ $attributes }}
    >@if ($self_closing){{ $content ? $content : '' }}{!! '</' . $tag . '>' !!}
    @endif
