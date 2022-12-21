@props(['default', 'list', 'name'])

<td class="py-4 px-6" x-data="{ show: false }">
    <div x-data="getInputValue()">
        <div class="dropdown relative">
            <button
                class="dropdown-toggle w-[250px] justify-between p-2.5 h-full rounded-sm hover:rounded-br-none hover:rounded-bl-none bg-gray-700 text-gray-400 font-bold text-xs leading-tight uppercase shadow-md hover:bg-sky-700 hover:shadow-lg focus:bg-sky-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap"
                type="button" id="dropdownMenuButton1tx" data-bs-toggle="dropdown" aria-expanded="false"
                @click="show = !show" @click.away="show = false" x-ref="btn">{{ $default ?? 'None' }}
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                    </path>
                </svg>
            </button>
            <ul class="dropdown-menu min-w-max absolute w-[250px] bg-white text-base z-20 list-none text-left rounded-bl-sm rounded-br-sm shadow-lg m-0 bg-clip-padding max-h-[50vh] overflow-y-auto"
                aria-labelledby="dropdownMenuButton1tx" x-show="show" x-ref="list" x-init="addListeners()"
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 36.8px, 0px);">
                <li class="relative">
                    <div @click="$refs.input.value = null; $refs.btn.innerHTML = 'NONE'; $refs.input.dispatchEvent(new InputEvent('change'))"
                        class="cursor-pointer text-left dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-200 capitalize">
                        None</div>
                </li>
                @foreach ($list as $item)
                    {{-- Test --}}
                    {{-- @dd($item->getAttributes()) --}}
                    <li><input class="dropdown-item text-sm py-2 px-4 font-normal block w-full
                        whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-200 cursor-pointer"
                            value="{{ $item->title }}"
                            @click="$refs.input.value = {{ $item->id }}; $refs.input.dispatchEvent(new InputEvent('change'))">
                    </li>
                @endforeach
            </ul>
            <x-form.input class="hidden" :hidden="true" name="{{ $name }}" x-ref="input"
                {{ $attributes }} />
        </div>
    </div>
</td>
