<!-- Moderator > Brand -> Table -->
<tr x-data="{ show: false, overlay: false }" @mouseover="show = true" @mouseout="show = false">

    <!-- Image Column -->
    <td class="py-4 px-6" @mouseover="overlay = true" @mouseout="overlay = false">
        <div class="h-10 w-10 flex-shrink-0 relative">
            <img class="h-10 w-10 rounded-full"
                src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="">
            <div class="absolute inset-0 z-10 bg-gray-900 bg-opacity-70 rounded-full flex flex-col justify-center items-center"
                x-show="overlay">
                <a href="" @click.prevent="document.querySelector('#image-update').click()"
                    class="w-5 h-5 flex flex-col justify-center items-center"><svg
                        class="w-3.5 h-3.5 text-white flex align-bottom" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </td>

    <!-- Title Column -->
    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white" x-data="data($el.firstElementChild.innerHTML)">
        <p @dblclick="toggleEditingState" x-show="!isEditing" x-text="text">Apple
        </p>
        <input type="text" x-model="text" x-show="isEditing" @click.away="toggleEditingState"
            @keydown.enter="disableEditing" @keydown.window.escape="disableEditing" x-ref="input" class="text-black">
    </td>

    <!-- Save Column -->
    <x-td formId='' />

    <!-- Delete Column -->
    <td class="py-4 px-6">
        <a href="#" x-show="show" @click.prevent="document.querySelector('#image-update').submit()"
            class="font-medium text-red-600 dark:text-red-500 hover:underline capitalize">delete</a>
    </td>
</tr>
