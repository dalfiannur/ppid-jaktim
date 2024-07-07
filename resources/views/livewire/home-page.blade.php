<div>
    <livewire:partials.top-bar />
    <livewire:home-page.hero />
    <livewire:home-page.statistic />
    <livewire:home-page.explore-information />
    <livewire:home-page.banner-slider />
    <livewire:home-page.video-series />
</div>

@pushOnce('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
@endpushOnce

@pushOnce('script-loaders')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
@endPushOnce
