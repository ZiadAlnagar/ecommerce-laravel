@props(['create' => null, 'src'])

<td class="py-4 px-6" @mouseover="overlay = true" @mouseout="overlay = false">
    <div class="h-10 w-10 flex-shrink-0 relative">
        @unless($create)
            <img class="h-10 w-10 rounded-full" src="{{ $src }}" loading="lazy" alt="">
        @else
            <div class="h-10 w-10 rounded-full bg-white"></div>
        @endunless

        <div class="absolute inset-0 z-10 bg-gray-900 bg-opacity-70 rounded-full flex flex-col justify-center items-center"
            @unless($create) x-show="overlay" @endif>
            <a href="" @click.prevent="$refs.imageBtn.click()"
                class="w-5 h-5 flex flex-col justify-center items-center">
                @unless($create)
                    <x-elems.icons.pen />
                @else
                    <x-elems.icons.plus />
                @endunless
            </a>
            <x-form.input type="file" name="image" id="image-update" class="hidden" x-ref="imageBtn"
                @change="$refs.imageInput.files = $refs.imageBtn.files" />
        </div>
    </div>
</td>

{{-- <td class="py-4 px-6">
    <div class="h-10 w-10 flex-shrink-0 relative">
        <div class="h-10 w-10 rounded-full bg-white"></div>
        <div
            class="absolute inset-0 z-10 bg-black bg-opacity-40 rounded-full flex flex-col justify-center items-center">
            <a href="" @click.prevent="document.querySelector('#image-update').click()"
                class="">
                <x-elems.icons.plus />
            </a>
            <input type="file" class="hidden" @change="$refs.imageInput.value = $refs.fileTemp.value" x-ref="fileTemp" />
        </div>
    </div>
</td> --}}
