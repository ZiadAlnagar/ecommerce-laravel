@props(['second_nav' => true])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body {{ $attributes->merge(['class' => 'bg-slate-200']) }}>
    <x-layouts.nav :second_nav="$second_nav" />
    {{ $slot }}
    @if ($second_nav)
        <x-layouts.footer />
    @endif
</body>

</html>
