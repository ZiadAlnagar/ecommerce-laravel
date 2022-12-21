@props(['content' => '', 'create' => null, 'ref' => null])

<td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white" x-data="data($el.firstElementChild.innerHTML)">
    @unless($create)
        <p class="rounded-sm" @dblclick="toggleEditingState" x-show="!isEditing" x-text="text">{{ $content }}</p>
        <input type="text" x-model="text" x-show="isEditing" @click.away="toggleEditingState" @keydown.enter="disableEditing"
            @keydown.window.escape="disableEditing" x-ref="input" class="rounded-sm text-black"
            {{ $attributes }}>
    @else
        <input type="text" class="rounded-sm text-black" @change="$refs.titleInput.value = $refs.titleTemp.value"
            x-ref="titleTemp" {{ $attributes }} />
    @endunless
</td>
