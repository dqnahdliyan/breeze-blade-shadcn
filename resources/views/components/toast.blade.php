@props(['variant' => 'primary', 'on'])

@php
    $varclass = 'group pointer-events-auto relative flex w-full items-center justify-between space-x-2 overflow-hidden rounded-md border p-4 pr-6 shadow-lg transition-all';
    switch ($variant) {
        case 'destructive':
            $varclass .= 'destructive group border-destructive bg-destructive text-destructive-foreground';
            break;
        case 'primary':
        default:
            $varclass .= 'border border-foreground/30 bg-background text-foreground';
            break;
    }
@endphp

<div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-show.transition.out.opacity.duration.1500ms="show" x-transition:leave.scale.10.origin.right.duration.1000
    class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse gap-y-2 p-4 sm:top-0 sm:right-0 sm:bottom-auto sm:flex-col md:max-w-[420px]">
    <div class="{{ $varclass }}">
        <div x-on:click="show = false"
            class="absolute right-1 top-1 rounded-md p-1 text-foreground/50 opacity-0 transition-opacity hover:text-foreground focus:opacity-100 focus:outline-none focus:ring-1 group-hover:opacity-100 group-[.destructive]:text-red-300 group-[.destructive]:hover:text-red-50 group-[.destructive]:focus:ring-red-400 group-[.destructive]:focus:ring-offset-red-600">
            <x-lucide-x class="w-4 h-4" />
        </div>
        <div class="flex flex-col gap-1">
            @isset($title)
                <div class="text-sm font-semibold [&+div]:text-xs">
                    {{ $title }}
                </div>
            @endisset
            <div class="text-sm opacity-90">{{ $slot->isEmpty() ? 'Saved.' : $slot }}</div>
        </div>
    </div>
</div>
