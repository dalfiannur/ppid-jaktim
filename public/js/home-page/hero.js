document.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide("#hero", {
        type: "loop",
        direction: "ttb",
        height: "100vh",
        autoplay: true,
        rewind: true,
        classes: {
            pagination: "splide__pagination",
            page: "splide__pagination__page transition-all aria-selected:h-6 aria-selected:rounded-lg !bg-white !opacity-100 aria-selected:!bg-primary !scale-100 duration-300",
        },
    });
    splide.mount();
});
