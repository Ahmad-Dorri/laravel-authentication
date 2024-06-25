@php
    $classes = 'w-full text-black hover:bg-slate-500 hover:text-white transition-colors duration-300 cursor-pointer px-4 py-2'
@endphp

@if(isset($href))
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <li {{ $attributes->merge(['class' => $classes]) }} >
        {{ $slot }}
    </li>
@endif
