@props(['name', 'label', 'casing' => 'uc', 'text_size' => 'text-sm', 'color' => 'text-gray-600'])

<label for="{{ $name }}" {{ $attributes->merge(['class' => "leading-7 $text_size $color"]) }}>{{ $casing == 'uc' ? ucwords($label) : ($casing == 'uc_first' ? ucfirst($label) : $label) }}</label>
