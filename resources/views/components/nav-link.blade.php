@props(['active' => false])

@php
    $defaultClasses = 'px-4 py-2 text-white transition-colors duration-300';
    if ($active) {
        $classes = $defaultClasses . ' bg-violet-500 hover:bg-violet-900';
    } else {
        $classes = $defaultClasses . ' bg-slate-500 hover:bg-slate-900';
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
