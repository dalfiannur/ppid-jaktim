<div id="top-bar" class="fixed top-0 z-40 w-full flex justify-center backdrop-blur-md bg-white/30 transition-all duration-500 text-white">
    <div class="w-full flex justify-between items-center py-6 px-32">
        <livewire:partials.logo />

        <ul id="menu" class="flex gap-20 text-lg font-semibold">
            @foreach ($menuLinks as $link)
                <li data-active="{{ $link['active'] ? 'active' : 'non-active' }}"
                    class="group data-[active=active]:border-b data-[active=active]:border-primary">
                    <a href="#"
                        class="group-data-[active=active]:text-primary">{{ $link['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@pushOnce('scripts')
    <script>
        const topBar = document.getElementById('top-bar')
        const links = document.querySelectorAll('#menu li a')
        document.addEventListener('scroll', () => {
            if(window.scrollY >= 457) {
                topBar?.classList.remove('bg-white/30', 'text-white');
                topBar?.classList.add('bg-white', 'text-black');
            } else {
                topBar?.classList.remove('bg-white', 'text-black');
                topBar?.classList.add('bg-white/30', 'text-white');
            }
        });
    </script>
@endpushOnce
