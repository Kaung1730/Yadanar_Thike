$(document).ready(function(){
    $number = $(".number").text;
    $(".minus").click(function(){
        console.log($number)
    })
    $(".plus").click(function(){
        $(".number").text+=1;
    })
})