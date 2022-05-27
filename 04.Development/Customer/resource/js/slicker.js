$(document).ready(function () {
    $('.homeslider').slick({
        centerMode: true,
        centerPadding: '70px',
        slidesToShow: 3,
        dots:true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // $('.headerSlider').slick();
})