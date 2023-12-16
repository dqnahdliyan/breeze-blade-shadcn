<a
    {{ $attributes->merge(['class' => 'relative flex cursor-pointer items-center gap-2 [&>svg]:h-4 [&>svg]:w-4 rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50']) }}>{{ $slot }}</a>
