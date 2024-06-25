@php
    $classes = 'px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-900 block transition-colors duration-300';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</button>
