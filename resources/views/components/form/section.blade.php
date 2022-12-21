@props(['name' => '', 'label' => '', 'with_label' => true, 'casing' => 'uc', 'classes'])

<div {{ $attributes->merge(['class' => 'relative mb-4']) }} {{ $attributes }}>
    @if ($with_label)
        <x-form.sub.label :name='$name' :label='$label' :casing='$casing' :class="$classes['label']" />
    @endif
    {{ $slot }}
    <x-form.sub.error :name='$name' />
</div>
