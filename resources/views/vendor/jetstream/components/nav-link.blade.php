@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-purple-800 text-md font-medium leading-5 text-gray-100 focus:outline-none focus:border-purple-600 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold leading-5 text-gray-500 hover:text-gray-700 hover:border-purple-700 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
