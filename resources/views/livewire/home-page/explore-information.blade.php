<div class="flex flex-col gap-10 px-[120px] py-20">
    <div class="flex justify-between items-center">
        <h3 class="text-left text-40px font-extrabold max-w-[830px]">Jelajahi Informasi Penting Dari Berbagai Kategori
            Informasi Publik</h3>
        <h4 class="text-right text-28px font-medium max-w-[700px] text-gray-500">Jelajahi berbagai informasi yang
            tersedia untuk Anda, dari pendidikan hingga layanan publik.</h4>
    </div>
    <div class="grid grid-cols-4 gap-10">
        @foreach ($informationList as $information)
            <livewire:home-page.explore-information-card :title="$information['title']" :value="$information['value']" :icon="$information['icon']" />
        @endforeach
    </div>
</div>
