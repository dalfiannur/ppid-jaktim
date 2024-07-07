document.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide("#banner-slider", {
        perPage: 1,
        focus: 'center',
        trimSpace: false,
        direction: "ltr",
        padding: 118,
        // height: "362px",
        autoplay: true,
        rewind: true,
        classes: {
            pagination: "splide__pagination",
            page: "splide__pagination__page transition-all aria-selected:w-6 aria-selected:rounded-lg !bg-white !opacity-100 aria-selected:!bg-primary !scale-100 duration-300",
        },
    });
    splide.mount();
});
