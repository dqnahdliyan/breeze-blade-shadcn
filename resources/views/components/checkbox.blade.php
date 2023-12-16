@props([
    'disabled' => false,
    'messages' => null,
    'value' => null,
    'id' => 'checkbox',
])

<label class='flex items-center gap-2'>
    <input {{ $disabled ? 'disabled' : '' }} type="checkbox" id="{{ $id }}"
        {{ $attributes->merge(['class' => 'peer h-4 w-4 shrink-0 rounded-sm appearance-none border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 checked:bg-primary checked:text-primary-foreground']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        class="absolute w-4 h-4 text-transparent peer-checked:text-primary-foreground" viewBox="0 0 16 16">
        <path
            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
    </svg>
    <label for="{{ $id }}"
        class='text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70'>
        {{ $value ?? $slot }}
    </label>
</label>

@if ($messages)
    <ul class='space-y-1 text-sm text-red-600 dark:text-red-400 mt-1.5'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
