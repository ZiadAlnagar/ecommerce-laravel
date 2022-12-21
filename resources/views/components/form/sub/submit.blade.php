@props(['content' => 'Submit', 'overwrite_class' => false])

@php
    $class = $overwrite_class ? '' : 'inline-flex text-white bg-blue-500 border-0 py-1.5 px-4 focus:outline-none hover:bg-blue-600 rounded text-lg';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $class]) }}
    {{ $attributes }}>{{ $slot->isNotEmpty() ? $slot : $content }}</button>
