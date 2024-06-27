@php
    $classes = 'rounded-3xl';
@endphp

<input {{ $attributes->merge(['class', $classes]) }} />
