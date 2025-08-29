@props(['active' => false])

@php
    $class = $active ?? false ? 'active' : '';
@endphp

<li>
    <a wire:navigate {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </a>
</li>
