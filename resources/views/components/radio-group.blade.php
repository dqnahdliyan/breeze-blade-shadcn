@props(['messages' => null, 'orientation' => 'vertical'])
@php
    $orientation = $orientation === 'vertical' ? 'flex-col space-y-1.5 justify-center' : 'flex-row space-x-3 items-center';
@endphp

<div {{ $attributes->merge(['class' => 'flex ' . $orientation]) }}>
    {{ $slot }}
</div>
@if ($messages)
    <ul class='space-y-1 text-sm text-red-600 dark:text-red-400 mt-1.5'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
