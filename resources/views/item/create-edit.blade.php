@php
    $edit = false;
    if ($item ?? false) {
        $title = 'Edit Item';
        $edit = true;
    } else {
        $title = 'Create Item';
    }

    $labelColor = 'text-gray-200';
    $inputHeight = 'h-9';
@endphp

<x-moderator.dashboard :title='$title'>
    <div class="h-[78vh] max-h-[78vh] overflow-y-auto px-16 py-8 bg-gray-800 rounded-md">
        <x-form :action="$edit ? route('item.edit') : route('item.create')" :heading="$edit ? $item->name : ''" :hasFile='true' :page='false'>
            <x-form.section :classes="['label' => $labelColor]" name='name' label='name' class="max-w-[400px]">
                <x-form.input name='name' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='category' label='category' class="max-w-[400px]">
                <x-elems.dropdown>
                    <x-elems.dropdown-link />
                </x-elems.dropdown>
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='brand' label='brand' class="max-w-[400px]">
                <x-form.input name='brand' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='specifications' label='specifications' class="max-w-[400px]">
                <x-form.input name='specifications' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='description' label='description' class="w-[800px]">
                <x-form.input tag='textarea' name='description' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='images' label='images' class="max-w-[400px]"
                x-init="viewImages('#image-input', '#img-container')">
                <x-form.input name='images' multiple type='file' id='image-input' :class='$inputHeight' />
                <div id='img-container' class="flex justify-between"></div>
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='stock' label='stock' class="max-w-[400px]">
                <x-form.input name='stock' type='number' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='price' label='price' class="max-w-[400px]">
                <x-form.input name='price' type='number' :class='$inputHeight' />
            </x-form.section>
            <x-form.section :classes="['label' => $labelColor]" name='state' label='state' class="max-w-[400px]">
                <x-form.input name='state' type='number' :class='$inputHeight' />
            </x-form.section>
        </x-form>
    </div>
</x-moderator.dashboard>

<script>
    function viewImages(imgInput, container) {
        let input = document.querySelector(imgInput);
        input.addEventListener("change", () => {
            let pp = document.querySelector(container);
            Array.from(input.files).forEach((file) => {
                let newImg = document.createElement("img");
                newImg.setAttribute('class', 'w-20 h-20 mr-1.5')
                newImg.setAttribute('src', URL.createObjectURL(file));
                pp.appendChild(newImg)
            })
        });
    }
</script>
