<x-layout>
    <main class="max-w-2xl mx-auto px-4 lg:max-w-7xl lg:px-8">
        <div class="pt-12 pb-24 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
            <aside>
                <h2 class="sr-only">Filters</h2>

                <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                <button type="button" class="inline-flex items-center lg:hidden">
                    <span class="text-sm font-medium text-gray-700">Filters</span>
                    <!-- Heroicon name: solid/plus-sm -->
                    <svg class="flex-shrink-0 ml-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <form class="divide-y divide-gray-300 space-y-10">
                        <div>
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                <div class="pt-6 space-y-3">
                                    <div class="flex items-center">
                                        <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-0" class="ml-3 text-sm text-gray-600"> White </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-1" class="ml-3 text-sm text-gray-600"> Beige </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-2" class="ml-3 text-sm text-gray-600"> Blue </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-3" class="ml-3 text-sm text-gray-600"> Brown </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-4" class="ml-3 text-sm text-gray-600"> Green </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-5" class="ml-3 text-sm text-gray-600"> Purple </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                <div class="pt-6 space-y-3">
                                    <div class="flex items-center">
                                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-0" class="ml-3 text-sm text-gray-600"> All New Arrivals </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-1" class="ml-3 text-sm text-gray-600"> Tees </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-2" class="ml-3 text-sm text-gray-600"> Crewnecks </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-3" class="ml-3 text-sm text-gray-600"> Sweatshirts </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-4" class="ml-3 text-sm text-gray-600"> Pants &amp; Shorts </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                <div class="pt-6 space-y-3">
                                    <div class="flex items-center">
                                        <input id="sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-0" class="ml-3 text-sm text-gray-600"> XS </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-1" class="ml-3 text-sm text-gray-600"> S </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-2" class="ml-3 text-sm text-gray-600"> M </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-3" class="ml-3 text-sm text-gray-600"> L </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-4" class="ml-3 text-sm text-gray-600"> XL </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-5" class="ml-3 text-sm text-gray-600"> 2XL </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </aside>

            <section aria-labelledby="product-heading" class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
                <h2 id="product-heading" class="sr-only">Products</h2>

                <div class="border-b border-gray-300 pb-3 mb-3">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>
                    <p class="mt-4 text-base text-gray-500">Checkout out the latest release of Basic Tees, new and improved with four openings!</p>
                </div>

                <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                    <div class="group relative bg-white border border-gray-300 rounded-lg flex flex-col overflow-hidden">
                        <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="w-full h-full object-center object-cover sm:w-full sm:h-full">
                        </div>
                        <div class="flex-1 p-4 space-y-2 flex flex-col">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee 8-Pack
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt all week, and an extra for laundry day.</p>
                            <div class="flex-1 flex flex-col justify-end">
                                <p class="text-sm italic text-gray-500">8 colors</p>
                                <p class="text-base font-medium text-gray-900">$256</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white border border-gray-300 rounded-lg flex flex-col overflow-hidden">
                        <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg" alt="Front of plain black t-shirt." class="w-full h-full object-center object-cover sm:w-full sm:h-full">
                        </div>
                        <div class="flex-1 p-4 space-y-2 flex flex-col">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every day.</p>
                            <div class="flex-1 flex flex-col justify-end">
                                <p class="text-sm italic text-gray-500">Black</p>
                                <p class="text-base font-medium text-gray-900">$32</p>
                            </div>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </section>
        </div>
    </main>
</x-layout>
