<div class="flex flex-col px-[120px] py-10">
    <div class="text-center flex flex-col gap-2">
        <h4 class="text-[40px] leading-[56px] font-semibold">Berita Pemerintah Terkini</h4>
        <p class="text-gray-500 text-[28px] leading-[40px]">
            Baca Berita Terkini Kegiatan dan Program Pemerintah
        </p>
    </div>

    <section id="recent-news" class="splide">
        <div class="splide__arrows hidden"></div>
        <button class="splide__toggle hidden" type="button">
            <span class="splide__toggle__play">Play</span>
            <span class="splide__toggle__pause">Pause</span>
        </button>
        <div class="splide__track py-12">
            <ul class="splide__list">
                @foreach ($recentNews as $news)
                    <li class="splide__slide grid grid-cols-4 gap-8">
                        <livewire:home-page.news-card :news="$news" class="col-span-2 row-span-2" />
                        <livewire:home-page.news-card :news="$news" class="col-span-2 h-[343px]" />
                        <livewire:home-page.news-card :news="$news" class="h-[343px]" />
                        <livewire:home-page.news-card :news="$news" class="h-[343px]" />
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

@pushOnce('scripts')
    <script>
        new Splide('#recent-news', {
            perPage: 1,
            autoplay: true,
        }).mount();
    </script>
@endpushOnce
