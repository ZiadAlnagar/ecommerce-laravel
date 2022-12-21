@props(['content', 'route', 'icon', 'tag' => 'a'])

@php
    $routeName = request()->url();
    if ($routeName == route($route)) {
        $class = 'bg-gray-900 text-white';
        $iconClass = 'text-gray-300';
    } else {
        $class = 'text-gray-300 hover:bg-gray-700 hover:text-white';
        $iconClass = 'text-gray-400 group-hover:text-gray-300';
    }
    $class .= ' group flex items-center px-2 py-2 text-sm font-medium rounded-md capitalize';
    $iconClass .= ' mr-3 flex-shrink-0 h-6 w-6';
    $iconElem = '';
    $iconElem .= $icon;
@endphp

<div class="relative">
    <{!! $tag !!} href="{{ route($route) }}" {{ $attributes->merge(['class' => $class]) }} class="{{ $class }}" {{ $attributes }}>
        @svg('heroicon-m-' . $icon, $iconClass)
        {{ $content }}
    </{!! $tag !!}>
</div>
