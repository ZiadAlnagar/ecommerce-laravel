@props(['category'])

@php
    $tempCat = $category;
    $parents = [];
@endphp

<div class="border-b border-gray-200">
    <nav aria-label="Breadcrumb" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <ol role="list" class="flex items-center space-x-4 py-4">
            @while ($tempCat->has('parent'))
                @php
                    $parents->prepend($tempCat->parent->title);
                    $tempCat = $tempCat->parent;
                @endphp
            @endwhile
            @foreach ($parents as $parent)
                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-4 text-sm font-medium text-gray-500 hover:text-gray-600"> {{ $parent }} </a>
                        <svg viewBox="0 0 6 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="h-5 w-auto text-gray-300">
                            <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                        </svg>
                    </div>
                </li>
            @endforeach
            <li class="text-sm">
                <p class="font-medium text-gray-900"> {{ $category->title }} </p>
            </li>
        </ol>
    </nav>
</div>
