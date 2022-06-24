$(document).ready(function(){
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2100,
        prevArrow:'<div ><img src="../resource/image/arrow_left.png"  class="arrow" alt=""></div>',
        nextArrow:'<div ><img src="../resource/image/arrow_right.png" class="arrow" alt=""></div>',
      });
 });