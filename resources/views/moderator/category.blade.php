{{-- ToDO --}}
{{-- Hide the current category from the dropdown menu --}}
{{-- There must be a parent of null value or enter a relationship loop --}}

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
                @foreach ($categories as $category)
                    <x-elems.table.tr x-data="{ show: false, overlay: false }" @mouseover="show = true" @mouseout="show = false">
                        <x-elems.table.td-text :content='$category->title'
                            @change="$refs.{{ $inputRef }}.value = $refs.input.value" />

                        <x-elems.table.td-dropdown :list='$categories' :default="$category->parent->title ?? 'None'" name='parent'
                            @change="$refs.{{ $catParentRef }}.value = $refs.input.value" />

                        <!-- Update Form -->
                        <x-elems.table.td-form :a="['color' => 'blue', 'text' => 'save', 'ref' => 'save']" :form="['action' => 'category', 'method' => 'PATCH', 'instance' => $category->id]">
                            <x-form.input name='title' class="hidden" :hidden="true" x-ref="{{ $inputRef }}" />
                            <x-form.input name='parent' class="hidden" :hidden="true" x-ref="{{ $catParentRef }}" />
                        </x-elems.table.td-form>
                        <!-- Delete Form -->
                        <x-elems.table.td-form :a="['color' => 'red', 'text' => 'delete', 'ref' => 'delete']" :form="['action' => 'category', 'method' => 'DELETE', 'instance' => $category->id]" />
                    </x-elems.table.tr>
                @endforeach

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    x-data="{ show: false }" @mouseover="show = true" @mouseout="show = false">
                    <x-elems.table.td-text create />

                    <x-elems.table.td-dropdown :list='$categories' default='None' name='parent'
                        @change="$refs.{{ $catParentRef }}.value = $refs.input.value" />

                    <x-elems.table.td />
                    <!-- Create Form -->
                    <x-elems.table.td-form :a="['color' => 'green', 'text' => 'create', 'ref' => 'create']" :form="['action' => 'category']" :create="true">
                        <x-form.input name='title' class="hidden" :hidden="true" x-ref="{{ $inputRef }}" />
                        <x-form.input name='parent' class="hidden" :hidden="true" x-ref="{{ $catParentRef }}" />
                    </x-elems.table.td-form>
                </tr>
            </tbody>
        </x-elems.table.table>
        <x-elems.flash name='status' />
    </div>
</x-moderator.dashboard>
