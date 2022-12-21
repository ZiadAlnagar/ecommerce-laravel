@props(['containerClass' => '', 'visible' => null])

<div x-data="{ show: false }" class="{{ $containerClass }}" {{ $attributes }} {{ $visible??'' }}>
    {{ $trigger }}
    <div class="relative">
        <ul {{ $attributes->merge(['class' => 'bg-white text-base z-20 list-none text-left shadow-lg m-0 bg-clip-padding border-none flex flex-col']) }}
            aria-labelledby="dropdownMenuButton1tx" x-show="show">
            {{-- style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 36.8px, 0px);"> --}}
            {{ $slot }}
        </ul>
    </div>
</div>
