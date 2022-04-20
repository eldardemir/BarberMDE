@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-purple-800 text-base font-semibold text-gray-200 bg-gray-700 focus:outline-none focus:text-gray-200 focus:bg-gray-200 focus:border-gray-100 transition duration-500'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-semibold text-gray-100 hover:text-gray-100 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-100 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
