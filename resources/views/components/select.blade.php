@props(['disabled' => false, 'placeholder' => 'Select', 'messages' => null, 'value' => null])

<div x-data="{ open: false, select: @js($value) }" @select.window="select = $event.detail, open = false" @click.outside="open = false"
    @close.stop="open = false" class="w-full">
    <input {{ $attributes->merge(['class' => 'hidden']) }} {{ $disabled ? 'disabled' : '' }} x-model="select"
        x-bind:value="select">
    <button @click="open = ! open" {{ $disabled ? 'disabled' : '' }}
        class='flex h-9 w-full items-center justify-between whitespace-nowrap rounded-md border border-input bg-transparent px-3 py-2 text-sm shadow-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50 [&>span]:line-clamp-1'>
        <span x-text="select || '{{ $placeholder }}'"></span>
        <x-lucide-chevrons-up-down class="w-4 h-4 right-3" />
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" style="display: none;"
        class="absolute z-50 min-w-[8rem] origin-top mt-2 overflow-x-hidden max-h-64 overflow-y-scroll rounded-md border shadow-sm border-input bg-popover text-popover-foreground ring-offset-background">
        <ul class="p-1 rounded-md bg-popover text-popover-foreground">
            {{ $slot }}
        </ul>
    </div>
</div>
@if ($messages)
    <ul class='space-y-1 text-sm text-red-600 dark:text-red-400 mt-1.5'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
