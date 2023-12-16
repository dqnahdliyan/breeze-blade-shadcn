@props(['disabled' => false, 'variant' => 'primary', 'size' => 'default', 'type' => 'button'])

@php
    $classes = 'inline-flex gap-2 [&>svg]:h-6 [&>svg]:w-6 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 ';
    switch ($variant) {
        case 'destructive':
            $classes .= 'bg-destructive text-destructive-foreground hover:bg-destructive/90';
            break;
        case 'outline':
            $classes .= 'border border-input bg-background hover:bg-accent hover:text-accent-foreground';
            break;
        case 'secondary':
            $classes .= 'bg-secondary text-secondary-foreground hover:bg-secondary/80';
            break;
        case 'ghost':
            $classes .= 'hover:bg-accent hover:text-accent-foreground';
            break;
        case 'link':
            $classes .= 'text-primary';
            break;
        case 'primary':
        default:
            $classes .= 'bg-primary text-primary-foreground hover:bg-primary/90';
            break;
    }
    switch ($size) {
        case 'sm':
            $classes .= ' h-8 rounded-md px-3 text-xs';
            break;
        case 'lg':
            $classes .= ' h-10 rounded-md px-8';
            break;
        case 'icon':
            $classes .= ' h-9 w-9';
            break;
        case 'default':
        default:
            $classes .= ' h-9 px-4 py-2';
            break;
    }
@endphp

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes, 'type' => $type]) }}>
    {{ $slot }}
</button>
