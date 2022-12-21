{{-- <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60"
    class="rounded-full"> --}}

<x-moderator.dashboard title='brand'>
    <div class="relative sm:rounded-lg max-h-full">
        <x-elems.table.search />
        <x-elems.table.table>
            <x-elems.table.thead>
                <x-elems.table.th value='image' class="w-1" />
                <x-elems.table.th>
                    <x-elems.table.th-sort value='title' />
                </x-elems.table.th>
                <x-elems.table.th value='' class="w-1" />
                <x-elems.table.th value='' class="w-1" />
            </x-elems.table.thead>
            <tbody>
                @php
                    $inputRef = 'titleInput';
                @endphp
                @foreach ($brands as $brand)
                    <x-elems.table.tr x-data="{ show: false, overlay: false }" @mouseover="show = true" @mouseout="show = false">
                        <x-elems.table.td-image :src="asset('storage/' . $brand->image->path)" />
                        <x-elems.table.td-text :content='$brand->title' ref='temp' inputRef='titleInput'
                            @change="$refs.{{ $inputRef }}.value = $refs.input.value; console.log($refs.{{ $inputRef }}.value)" />
                        <!-- Update Form -->
                        <x-elems.table.td-form :a="['color' => 'blue', 'text' => 'save', 'ref' => 'save']" :form="['action' => 'brand', 'method' => 'PATCH', 'instance' => $brand->id]">
                            <x-form.input type='file' name='image' class="hidden" :hidden="true"
                                x-ref="imageInput" />
                            <x-form.input name='title' class="hidden" :hidden="true" x-ref="titleInput" />
                        </x-elems.table.td-form>
                        <!-- Delete Form -->
                        <x-elems.table.td-form :a="['color' => 'red', 'text' => 'delete', 'ref' => 'delete']" :form="['action' => 'brand', 'method' => 'DELETE', 'instance' => $brand->id]" />
                    </x-elems.table.tr>
                @endforeach

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    x-data="{ show: false }" @mouseover="show = true" @mouseout="show = false">
                    <x-elems.table.td-image create />
                    <x-elems.table.td-text create />
                    <x-elems.table.td />
                    <!-- Create Form -->
                    <x-elems.table.td-form :a="['color' => 'green', 'text' => 'create', 'ref' => 'create']" :form="['action' => 'brand', 'hasFile' => true]" :create="true">
                        <x-form.input type='file' name='image' class="hidden" :hidden="true"
                            x-ref="imageInput" />
                        <x-form.input name='title' class="hidden" :hidden="true" x-ref="titleInput" />
                    </x-elems.table.td-form>
                </tr>
            </tbody>
        </x-elems.table.table>
        <x-elems.flash name='status' />
    </div>
</x-moderator.dashboard>
