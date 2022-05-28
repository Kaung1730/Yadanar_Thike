$(document).ready(function () {
    $('.homeslider').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3,
        dots:true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // $('.headerSlider').slick();
})