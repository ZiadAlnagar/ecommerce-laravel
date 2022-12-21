@props(['title'])

<x-layout :second_nav="false" class="max-h-screen overflow-y-hidden">
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed min-h-screen">
        <div class="flex-1 flex flex-col min-h-0 bg-gray-800">
            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4 space-y-1">
                    <x-moderator.nav-item content='dashboard' route="dashboard" icon="home" />
                    <x-elems.dropdown containerClass='w-full' class="w-3/4 ml-8 bg-transparent" :visible="request()->routeIs('item.*') ? 'x-init=show=true' : ''">
                        <x-slot name="trigger">
                            <x-moderator.nav-item class="w-full" content='Product' route="item.index" icon="cube"
                                tag='button' @click="show = !show" />
                        </x-slot>
                        <x-moderator.nav-item content='all' route="item.index" icon="archive-box" />
                        <x-moderator.nav-item content='create' route="item.create" icon="archive-box-arrow-down" />
                    </x-elems.dropdown>
                    <x-moderator.nav-item content='brand' route="brand.index" icon="check-badge" />
                    <x-moderator.nav-item content='category' route="category.index" icon="squares-plus" />
                    {{-- <x-moderator.nav-item content='category' route="dashboard" icon="home" /> --}}
                </nav>
            </div>
        </div>
    </div>
    <div class="md:pl-64 flex flex-col">
        <main class="flex-1">
            <div class="px-5 py-4 mx-auto h-[92vh] max-h-[92vh]">
                <div class="max-w-7xl">
                    <div class="border-b-[3px] border-slate-300">
                        <h1
                            class="text-3xl font-semibold capitalize border-b-[3px] border-sky-600 pb-2 inline-block -mb-[0.2rem]">
                            {{ $title ?? 'dashboard' }}</h1>
                    </div>
                </div>
                <div class="max-w-7xl">
                    <div class="py-4">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
