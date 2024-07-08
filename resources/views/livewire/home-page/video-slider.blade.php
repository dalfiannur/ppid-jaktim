<div class="flex flex-col items-center px-[120px] py-10">
    <div class="text-center flex flex-col gap-2">
        <h4 class="text-[40px] leading-[56px] font-semibold">Video Informasi dan Edukasi</h4>
        <p class="text-gray-500 text-[28px] leading-[40px]">
            Temukan informasi penting melalui video-video kami. Dari panduan layanan hingga berita terbaru, tonton video
            kami untuk tetap terinformasi dan teredukasi.
        </p>
    </div>

    <section id="video-slider" class="splide">
        <div class="splide__arrows"></div>
        <button class="splide__toggle hidden" type="button">
            <span class="splide__toggle__play">Play</span>
            <span class="splide__toggle__pause">Pause</span>
        </button>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($videos as $video)
                    <li class="splide__slide group py-20">
                        <div
                            class="w-full group-[.is-active]:scale-125 group-[.is-prev]:ml-[50%] group-[.is-next]:ml-[-50%] group-[.is-next]:-z-10 overflow-hidden relative rounded-xl transition-all duration-300">
                            <img src="{{ asset('images/banner-background.png') }}" alt="hero"
                                class="w-full aspect-[6/3] object-cover" />
                            <div
                                class="absolute left-0 bottom-0 w-full  text-white text-center p-3 flex flex-col gap-1">
                                <h6 class="text-xl font-semibold">
                                    {{ $video['title'] }}
                                </h6>
                                <p class="text-sm">(Bincang Seputar Kota Kita)</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

@pushOnce('scripts')
    <script>
        new Splide('#video-slider', {
            perPage: 3,
            perMove: 1,
            focus: 'center',
            type: 'loop',
            speed: 1000,
            // autoplay: true,
            trimSpace: false,
            gap: 20,
            updateOnMove: true,
            classes: {
                pagination: 'splide__pagination your-class-pagination',
                page: 'splide__pagination__page !bg-gray-400 aria-selected:!bg-primary aria-selected:!w-6 aria-selected:!rounded-full aria-selected:!scale-100 !opacity-100',
            },
        }).mount();
    </script>
@endpushOnce
