$(document).ready(function(){
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2100,
        prevArrow:'<div class="arrow"><img src="../resource/image/arrow_left.png" alt=""></div>',
        nextArrow:'<div class="arrow"><img src="../resource/image/arrow_right.png" alt=""></div>',
      }); 
 });