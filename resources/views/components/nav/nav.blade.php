@props(['second_nav'])

<nav>
    <div class="bg-sky-600">
        <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-7">
            <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2 ml-2">
                <x-nav.app-logo />
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-7">
                <div class="flex items-center px-6 py-2.5 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                    <div class="w-full">
                        @if ($second_nav)
                            <x-nav.search />
                        @else
                            <div class="h-10"></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-3 lg:mr-7">
                <div class="flex justify-center">
                    <div class="px-2">
                        <x-nav.language />
                    </div>
                </div>
                <x-nav.auth href="/login" />
                <x-nav.a-container href="/orders">Orders</x-nav.a-container>
                <x-nav.cart />
            </div>
        </div>
    </div>
</nav>
