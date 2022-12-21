@props(['form' => ['action', 'method', 'hasFile' => false], 'create' => false, 'a' => ['color', 'text', 'ref']])

<td class="py-4 px-6">
    <a href="#" x-show="show" @click.prevent="$refs.{{ $a['ref'] }}.submit()"
        class="font-medium text-{{ $a['color'] }}-600 dark:text-{{ $a['color'] }}-500 hover:underline capitalize">{{ $a['text'] }}</a>
    <x-form action="/{{ $form['action'] }}{{ !$create ? '/'.$form['instance'] : '' }}" :page="false" :hasFile={{ $hasFile }} x-ref="{{ $a['ref'] }}">
        @if (!$create)
            @method($form['method'])
        @endif
        {{ $slot }}
    </x-form>
</td>
