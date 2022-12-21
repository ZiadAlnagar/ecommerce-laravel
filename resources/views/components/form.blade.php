@props(['page' => true, 'heading' => '', 'action', 'method' => 'post', 'hasFile' => false])

@if ($page)
    <section class="px-6 py-8 w-full">
        <main {{ $attributes->merge(['class' => 'mx-auto bg-gray-100 border border-gray-200 p-8 rounded-xl']) }}>
            <h1 class="text-center font-bold text-xl my-10 capitalize">{{ $heading }}</h1>
@endif
<form action="{{ $action }}" method="{{ $method }}" {{ $attributes }}
    {{ $hasFile ? 'enctype=multipart/form-data' : '' }}>
    @csrf
    {{ $slot }}
</form>
@if ($page)
    </main>
    </section>
@endif
