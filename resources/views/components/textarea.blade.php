@props(['disabled' => false, 'messages' => null])
<textarea {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => 'flex min-h-[60px] w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50']) }}>
</textarea>

@if ($messages)
    <ul class='text-sm text-red-600 space-y-0.5 mt-1'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
