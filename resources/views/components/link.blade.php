@php
    $classes = 'text-blue-500 hover:underline px-4 py-2 block transition-colors duration-300';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
