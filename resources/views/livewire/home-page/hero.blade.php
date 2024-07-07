<div>
    <section id="hero" class="splide" aria-label="Hero PPID Jakarta Timur">
        <div class="splide__arrows hidden"></div>
        <button class="splide__toggle hidden" type="button">
            <span class="splide__toggle__play">Play</span>
            <span class="splide__toggle__pause">Pause</span>
        </button>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($heroImages as $image)
                    <li class="splide__slide relative">
                        <img src="{{ asset('images/' . $image) }}" alt="hero" class="w-full h-screen object-cover">
                        <div class="absolute inset-0 bg-[#24131D80] flex flex-col justify-center items-center">
                            <h2
                                class="text-transparent text-[160px] leading-[130px] font-extrabold uppercase bg-clip-text bg-hero-text-background opacity-60 bg-cover bg-center outline-[3px] outline-white">
                                PPID Jakarta Timur</h2>
                            <div class="flex flex-col gap-10">
                                <div class="text-center text-white max-w-7xl">
                                    <h4 class="text-7xl leading-[100px] font-bold uppercase">Transparansi Informasi
                                        Publik</h4>
                                    <p class="text-3xl font-semibold">Portal resmi untuk berbagai informasi dan
                                        dokumentasi publik yang dikelola oleh PPID untuk pelayanan yang lebih baik</p>
                                </div>

                                <div class="flex flex-col items-center">
                                    <div class="text-white text-center flex flex-col gap-3">
                                        <h6 class="text-2xl font-bold">Layanan Utama:</h6>
                                        <p class="text-xl font-semibold">Waktu Pelayanan 08.00 - 16.00 ( Senin - Jumat )
                                        </p>
                                    </div>
                                    <div class="grid grid-cols-3 gap-8 max-w-[960px] pt-4 pb-10">
                                        <a href="#">
                                            <div class="flex items-center gap-4 bg-white rounded-md px-4 py-6">
                                                <img src="{{ asset('icons/permohonan-informasi-perorangan.png') }}"
                                                    class="w-8 h-8">
                                                <p class="text-sm font-bold">Permohonan Informasi Perorangan</p>
                                                <img src="{{ asset('icons/link.png') }}" class="w-7 h-7">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="flex items-center gap-4 bg-white rounded-md px-4 py-6">
                                                <img src="{{ asset('icons/permohonan-informasi-perorangan.png') }}"
                                                    class="w-8 h-8">
                                                <p class="text-sm font-bold">Permohonan Informasi Organisasi</p>
                                                <img src="{{ asset('icons/link.png') }}" class="w-7 h-7">
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="flex items-center gap-4 bg-white rounded-md px-4 py-6">
                                                <img src="{{ asset('icons/permohonan-informasi-perorangan.png') }}"
                                                    class="w-8 h-8">
                                                <p class="text-sm font-bold max-w-[150px]">Form Keberatan Informasi</p>
                                                <img src="{{ asset('icons/link.png') }}" class="w-7 h-7">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

@pushOnce('scripts')
    <script src="{{ asset('js/home-page/hero.js') }}"></script>
@endpushOnce
