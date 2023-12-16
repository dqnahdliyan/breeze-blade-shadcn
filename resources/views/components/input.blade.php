@props(['disabled' => false, 'messages' => null])

<input {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50']) }}>

@if ($messages)
    <ul class='space-y-1 text-sm text-red-600 dark:text-red-400 mt-1.5'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
