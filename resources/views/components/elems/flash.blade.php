@props(['name'])

@if (session()->has($name))
    <div class="fixed inset-x-0 bottom-5 border-2 border-green-500 rounded-lg text-sm mx-auto w-80 bg-white"
        x-data="{ show: true }" x-init="setTimeout(() => show = false, 6000)" x-show="show">
        <p class="text-green-500 text-center font-semibold my-2.5">{{ session('status') }}</p>
    </div>
@endif
