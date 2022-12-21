<div class="bg-white border-b border-gray-200 uppercase w-5/6 mx-auto">
    <div class="h-12 flex items-center">
        <div class="flex justify-center h-full pr-2.5" x-data="{ show: false }" @mouseover.away="show = false">
            <div>
                <div class="dropdown relative h-full">
                    <button
                        class="dropdown-toggle p-2.5 h-full bg-sky-700 text-white font-bold text-xs leading-tight uppercase shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap"
                        type="button" id="dropdownMenuButton1tx" data-bs-toggle="dropdown" aria-expanded="false"
                        @mouseover="show = !show">
                        Browse categories
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                            class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                            </path>
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1 m-0 bg-clip-padding border-none"
                        aria-labelledby="dropdownMenuButton1tx" x-show="show"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 36.8px, 0px);">
                        <span
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">English
                            - en</span>
                        <li>
                            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                href="#">Arabic - Ar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded">
            <a href="#" class="font-bold text-xs text-black hover:text-sky400 px-2.5 py-3">cool
            </a>
        </div>
        <div class="rounded">
            <a href="#" class="font-bold text-xs text-black hover:text-sky400 px-2.5 py-3">beans
            </a>
        </div>
    </div>
</div>
