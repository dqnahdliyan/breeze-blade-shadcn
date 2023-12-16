@props(['value' => null])
<li x-data x-model="select" @click.stop="$dispatch('select', @js($value))"
    @click="$dispatch('select', @js($value))" @keydown.enter="$dispatch('select', @js($value))"
    @keydown.space="$dispatch('select', @js($value))"
    x-bind:class="select == @js($value) ? 'bg-accent text-accent-foreground [&>svg]:block' : '[&>svg]:hidden'"
    class="relative flex w-full cursor-default justify-between select-none items-center rounded-sm py-1.5 pl-2 pr-20 text-sm outline-none hover:bg-accent hover:text-accent-foreground">
    {{ $slot }}
    <x-lucide-check class="absolute w-4 h-4 right-2" />
</li>
