$(document).ready(function(){
    $(".increase-btn").click(function(e){
        e.preventDefault();
        var qty = $(".qty").val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 1 : value;
        //to set maximun 10 for each book
        if(value < 10){
            value++;
            $(".qty").val(value);
        }
    })
    $(".decrease-btn").click(function(e){
        e.preventDefault();
        var qty = $(".qty").val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 1 : value;
        //to set maximun 10 for each book
        if(value > 1){
            value--;
            $(".qty").val(value);
        }
    })
})