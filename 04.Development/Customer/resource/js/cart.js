$(document).ready(function(){
    $("#basket").text(localStorage.getItem('cartCount'));
    $(".order-count").text(localStorage.getItem('cartCount'));
    $("#cart-btn").click(function(){
        var book_id = $(this).val();
        var quantity = $(".qty").val();
        var customer_id = $("#customer_id").val();
        alert(customer_id);

        let postData = {
            "customer_id": customer_id,
            "book_id": book_id,
            "quantity": quantity
        }
        $.ajax({
            url: "../Controller/cartInsertController.php",
            type: "POST",
            data: { send: JSON.stringify(postData) },
            success: function (res) {
                var cartCount = res;
                localStorage.setItem('cartCount', cartCount);
                $(".order-count").text(cartCount);
            },
            error: function (err) {
                console.log(err);
            }
    });

})
})