<div {{ $attributes->merge(['class' => 'rounded-xl border bg-card text-card-foreground']) }}>
    @isset($header)
        <div class="flex flex-col space-y-1.5 p-6">
            @isset($title)
                <h3 class="text-2xl font-semibold leading-none tracking-tight">
                    {{ $title }}
                </h3>
            @endisset
            @isset($description)
                <div class="text-sm text-muted-foreground">
                    {{ $description }}
                </div>
            @endisset
        </div>
    @endisset

    @isset($content)
        <div class="p-6 pt-0">
            {{ $content }}</div>
    @else
        <div class="p-6">{{ $slot }}</div>
    @endisset

    @isset($footer)
        <div class="flex items-center p-6 pt-0">
            {{ $footer }}
        </div>
    @endisset
</div>
