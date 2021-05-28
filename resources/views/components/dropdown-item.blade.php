@props(['active'])

@php
    $classes = 'block text-left px-2 text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white';
    if($active) {
        $classes .=' bg-blue-500 text-white';
    }
@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
