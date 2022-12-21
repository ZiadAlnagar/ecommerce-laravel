@props(['item'])

{{-- ToDo --}}
{{-- Half Star --}}

<div class="bg-white rounded-lg shadow-md border w-60 h-[400px] max-h-[400px] shrink-0 flex flex-col justify-between">
    <a href="#">
        <img class="px-4 pt-4 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
            alt="product image">
    </a>
    <div class="px-5 py-5">
        <a href="#">
            <h5 class="text-md font-semibold tracking-tight text-gray-900 text-center mb-2">
                {{ $item->name }}</h5>
        </a>
        <a href="#">
            <h6 class="text-sm font-semibold tracking-tight text-gray-600 text-center capitalize">
                {{ $item->brand->title }} </h6>
        </a>
        <div class="flex items-center justify-center mt-2 mb-1.5">
            @for (i = 0; i <= 5; i++)
                @if ($i < floor($item->rating))
                    <x-heroicon-s-star class='w-5 h-5 text-yellow-300' />
                @else
                    <x-heroicon-o-star class='w-5 h-5' />
                @endif
            @endfor
        </div>
        <div class="flex flex-col justify-between items-center">
            <span class="text-md font-bold text-gray-900 uppercase">{{ $item->price }} l.e</span>
            <a href="#"
                class="text-white mt-1 uppercase bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-xs p-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                to cart</a>
        </div>
    </div>
</div>
