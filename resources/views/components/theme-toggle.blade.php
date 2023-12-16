<div {{ $attributes->merge(['class' => 'block']) }}>
    <x-tooltip>
        <x-slot name="trigger">
            <x-button size="icon" variant="ghost" x-data @click="darkMode = ! darkMode">
                <x-lucide-moon class="block w-6 h-6 dark:hidden" />
                <x-lucide-sun class="hidden w-6 h-6 dark:block" />
            </x-button>
        </x-slot>
        <span>Theme Switch</span>
    </x-tooltip>
</div>

<script>
    function setMetaThemeColor(setting) {
        const metaThemeColor = document.getElementById("theme-color-meta");
        if (metaThemeColor) {
            switch (setting) {
                case 'dark':
                    metaThemeColor.setAttribute("content", "#09090b");
                    break;
                case 'light':
                    metaThemeColor.setAttribute("content", "#ffffff");
                    break;
                case 'system':
                    window.matchMedia('(prefers-color-scheme: dark)').matches ? metaThemeColor.setAttribute("content",
                        "#020713") : metaThemeColor.setAttribute("content", "#ffffff");
                    break;
                default:
                    metaThemeColor.setAttribute("content", "#ffffff")
            }
        }
    }

    function updateTheme() {
        const themes = ['light', 'dark', 'system'];
        const currentTheme = localStorage.getItem('theme') || 'system';
        themes.forEach((theme) => {
            document.documentElement.classList.remove(theme)
        });
        if (currentTheme === 'system') {
            window.matchMedia('(prefers-color-scheme: dark)').matches ? document.documentElement.classList.add('dark') :
                document.documentElement.classList.add('light')
        } else {
            document.documentElement.classList.add(currentTheme)
        }
        setMetaThemeColor(currentTheme)
    }

    updateTheme();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (localStorage.getItem('theme') === 'system') {
            e.matches ? document.documentElement.classList.add('dark') : document.documentElement.classList
                .remove('dark');
            setMetaThemeColor('system')
        }
    })
</script>
