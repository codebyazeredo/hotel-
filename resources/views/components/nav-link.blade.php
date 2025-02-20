@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-3 py-2 rounded-lg bg-indigo-500 text-white text-sm font-medium shadow-md hover:bg-indigo-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-150 ease-in-out'
                : 'inline-flex items-center px-3 py-2 rounded-lg text-gray-600 hover:text-white hover:bg-gray-400 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
