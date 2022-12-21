@props(['value'])

<th scope="col" {{ $attributes->merge(['class' => 'py-3 px-6']) }}>
    {{ $slot->isEmpty() ? $value : $slot }}
</th>
