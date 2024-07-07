<div class="flex flex-col px-[120px] py-10">
    <div class="text-center flex flex-col gap-2">
        <h4 class="text-[40px] leading-[56px] font-semibold">Bis Kota ( Bincang Seputar Kota Kita )</h4>
        <p class="text-gray-500 text-[28px] leading-[40px]">
            Temukan cerita menarik dan informasi terkini seputar kota kita di podcast 'Bis Kota'. Ayo dengarkan sekarang
        </p>
    </div>

    <section id="video-series" class="splide">
        <div class="splide__arrows hidden"></div>
        <button class="splide__toggle hidden" type="button">
            <span class="splide__toggle__play">Play</span>
            <span class="splide__toggle__pause">Pause</span>
        </button>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($videoSeries as $series)
                    <li class="splide__slide flex flex-col gap-2 py-20">
                        <div class="w-full overflow-hidden relative rounded-xl">
                            <img src="{{ asset('images/banner-background.png') }}" alt="hero"
                                class="w-full aspect-[9/10] object-cover" />
                            <div
                                class="absolute left-0 bottom-0 w-full  text-white text-center p-3 flex flex-col gap-1">
                                <h6 class="text-xl font-semibold">
                                    Bis Kota
                                </h6>
                                <p class="text-sm">(Bincang Seputar Kota Kita)</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 text-sm">
                            <h5 class="text-gray-900 font-semibold">
                                {{ $series['title'] }}
                            </h5>
                            <p class="font-medium text-gray-500">
                                {{ $series['duration'] }}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

@pushOnce('scripts')
    <script>
        new Splide('#video-series', {
            perPage: 7,
            focus: 0,
            gap: 32,
            type: 'loop',
            autoplay: true,
            classes: {
                pagination: 'splide__pagination your-class-pagination',
                page: 'splide__pagination__page !bg-gray-400 aria-selected:!bg-primary aria-selected:!w-6 aria-selected:!rounded-full aria-selected:!scale-100 !opacity-100',
            },
        }).mount();
    </script>
@endpushOnce
