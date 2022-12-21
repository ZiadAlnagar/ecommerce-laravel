<div class="dropdown relative" x-data="{ show: false }" @mouseover.away="show = false">
    <button
        class="dropdown-toggle px-2.5 py-3 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap"
        type="button" id="dropdownMenuButton1tx" data-bs-toggle="dropdown" aria-expanded="false" @mouseover="show = !show">
        en
        <x-elems.icons.down-arrow />
    </button>
    <ul class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1 m-0 bg-clip-padding border-none"
        aria-labelledby="dropdownMenuButton1tx" x-show="show"
        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 36.8px, 0px);">
        <span class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">English
            - en</span>
        <li>
            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                href="#">Arabic - Ar</a>
        </li>
    </ul>
</div>
