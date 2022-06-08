$(document).ready(function(){
    $(".updown-icon").click(function(){
        $(this).parents(".firstRow").next(".answer").slideToggle();

    })

})