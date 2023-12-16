@props(['content'])
<div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false" class="flex justify-center">
    <div @mouseenter="open = ! open" @mouseleave="open = ! open" class="relative">
        {{ $trigger }}
    </div>
    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="absolute text-center transition top-14 z-50 overflow-hidden rounded-md bg-primary px-3 py-1.5 text-xs text-primary-foreground">
        {{ $content ?? $slot }}
    </div>
</div>
