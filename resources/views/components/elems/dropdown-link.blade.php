@props(['tag' => 'a', 'item', 'route'])

<li>
    <{!! $tag !!}
        {{ $attributes->merge(['class' => 'dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100']) }}
        {{ $tag == 'a' ? 'href=$route' : '' }}>{{ ucwords($item) }}</{!! $tag !!}>
</li>
