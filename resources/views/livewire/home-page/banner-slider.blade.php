<div>
    <section id="banner-slider" class="splide" aria-label="Hero PPID Jakarta Timur">
        <div class="splide__arrows hidden"></div>
        <button class="splide__toggle hidden" type="button">
            <span class="splide__toggle__play">Play</span>
            <span class="splide__toggle__pause">Pause</span>
        </button>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($banners as $banner)
                    <li class="splide__slide pr-8 py-8">
                        <div class="w-full h-[362px] bg-red-500 rounded-xl overflow-hidden relative">
                            <img src="{{ asset('images/banner-background.png') }}" alt="hero"
                                class="w-full h-full object-cover" />
                            <div class="absolute left-0 w-full top-8 flex justify-center items-center text-white">
                                <livewire:partials.logo />
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
                                <h4 class="text-5xl leading-[68px] text-white font-bold max-w-[80%] text-center">PPID
                                    JAKARTA TIMUR Tampil Dengan Wajah Baru Memberikan Pelayanan kepada Warga Jauh
                                    Lebih Baik</h4>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

@pushOnce('scripts')
    <script src="{{ asset('js/home-page/banner-slider.js') }}"></script>
@endpushOnce
