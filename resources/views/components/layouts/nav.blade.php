@props(['second_nav'])

<header class="bg-white shadow-sm lg:static lg:overflow-y-visible">
    <x-nav.nav :second_nav="$second_nav" />
    @if ($second_nav)
        <x-nav.second-nav />
    @endif
</header>
