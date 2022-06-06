$(document).ready(function(){
    $("#addToCart").click(function(){
        var book_id = $("#bookDespValue").val();
        var qtyValue = $(".qty").val();
        var stockNumber = parseInt($("#stockNumber").text());
        var currentCartNumber = parseInt($("#basket").text());
        currentCartNumber++;
        $("#basket").text(currentCartNumber);
        $(".order-count").text(currentCartNumber);
        let postData = {"book_id": book_id};

        $.ajax({
            url: "../Controller/addToCartController.php",
            type: "POST",
            data: { send: JSON.stringify(postData) },
            success: function (res) {
                var data = JSON.parse(res);
                $("#imgCart").attr("src", data[0].book_img);
                $(".book-title").text(data[0].book_name);
                $(".book-qty").text(qtyValue);
                $(".book-price").text(data[0].book_price);
                $totalPrice = parseInt(qtyValue)*parseInt(data[0].book_price);
                $(".total-price").text($totalPrice);
            },
            error: function (err) {
                console.log(err)
            }
        });
    })
});