@if (auth()->user())
    <div class="flex justify-center" x-data="{ show: false }" @mouseover="show = true" @mouseout="show = false">
        <div class="pr-5">
            <div class="dropdown relative">
                <button
                    class="dropdown-toggle px-2.5 py-3 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap"
                    type="button" id="dropdownMenuButton1tx" data-bs-toggle="dropdown" aria-expanded="false">
                    My Account
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                        </path>
                    </svg>
                </button>
                <ul class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1 m-0 bg-clip-padding border-none"
                    aria-labelledby="dropdownMenuButton1tx" x-show="show"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 36.8px, 0px);">
                    <li>
                        <x-elems.dropdown-link item='Dashboard' />
                        <x-elems.dropdown-link item='Orders' />
                        <x-elems.dropdown-link item='Funds' />
                        <x-elems.dropdown-link item='Refund requests' />
                        <x-elems.dropdown-link item='Coupons' />
                        <x-elems.dropdown-link item='Addresses' />
                        <x-elems.dropdown-link item='Account details' />
                        <x-elems.dropdown-link item='Wishlist' />
                        <x-form action='/logout' :page='false'>
                            <x-form.sub.submit class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 text-left" :overwrite_class='true'>Logout</x-form.sub.submit>
                        </x-form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@else
    <x-nav.a-container {{ $attributes }}>
        Login / Register
    </x-nav.a-container>
@endif
