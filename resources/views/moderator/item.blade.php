<x-moderator.dashboard title='category'>
    <div class="relative sm:rounded-lg max-h-full">
        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <x-elems.table.search />
        <x-elems.table.table>
            <x-elems.table.thead>
                <x-elems.table.th class="w-5">
                    <x-elems.table.th-sort value='title' />
                </x-elems.table.th>
                <x-elems.table.th class="w-5">
                    <x-elems.table.th-sort value='parent' />
                </x-elems.table.th>
                <x-elems.table.th value='' class="w-1" />
                <x-elems.table.th value='' class="w-1" />
            </x-elems.table.thead>
            <tbody>
                @php
                    $inputRef = 'titleInput';
                    $catParentRef = 'parentInput';
                @endphp
                {{-- each row should have name, stock, status, views, sold  --}}
                @foreach ($items as $item)
                    <x-elems.table.tr x-data="{ show: false, overlay: false }" @mouseover="show = true" @mouseout="show = false">
                        <x-elems.table.td-text :content='$item->title'
                            @change="$refs.{{ $inputRef }}.value = $refs.input.value" />

                        <x-elems.table.td-dropdown :list='$categories' :default="$item->parent->title ?? 'None'" name='parent'
                            @change="$refs.{{ $catParentRef }}.value = $refs.input.value" />

                        <!-- Update Form -->
                        <x-elems.table.td-form :a="['color' => 'blue', 'text' => 'save', 'ref' => 'save']" :form="['action' => 'item', 'method' => 'PATCH', 'instance' => $item->id]">
                            <x-form.input name='title' class="hidden" :hidden="true" x-ref="{{ $inputRef }}" />
                            <x-form.input name='parent' class="hidden" :hidden="true" x-ref="{{ $catParentRef }}" />
                        </x-elems.table.td-form>
                        <!-- Delete Form -->
                        <x-elems.table.td-form :a="['color' => 'red', 'text' => 'delete', 'ref' => 'delete']" :form="['action' => 'item', 'method' => 'DELETE', 'instance' => $item->id]" />
                    </x-elems.table.tr>
                @endforeach

                {{-- <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <x-elems.table.td>
                        <a href="#" x-show="show" @click.prevent="$refs.{{ $a['ref'] }}.submit()"
                            class="font-medium text-{{ $a['color'] }}-600 dark:text-{{ $a['color'] }}-500 hover:underline capitalize">{{ $a['text'] }}</a>
                    </x-elems.table.td>
                </tr> --}}
            </tbody>
        </x-elems.table.table>
        <x-elems.flash name='status' />
    </div>
</x-moderator.dashboard>
