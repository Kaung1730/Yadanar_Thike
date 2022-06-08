$(document).ready(function(){
    var data;
    $("#addToCart").click(function(){
        var book_id = $(this).val();
        var quantity = $(".qty").val();
        alert(book_id);
        let postData = {
            "book_id":book_id,
            "qty": quantity,
        }
        $.ajax({
            url: "../Controller/addToCartController.php",
            type: "POST",
            data:{send: JSON.stringify(postData)},
            success: function (res){
                data = $.parseJSON(res);
                $("#basket").text(data.length);
                console.log(data);
                $(".book-qty").text(data);
                //to clear old data
                $("#cartBody").empty();
                for (const iterator of data) {
                    $("#cartBody").append(`
                    <div class="row g-0">
                        <div class="col-lg-3">
                            <img src="${iterator[0].book_img}" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" id="imgCart"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="row text-white">
                                <div class="col-12">
                                    <input type="hidden" name="book_id">
                                    <p class="book-title">${iterator[0].book_name}</p>
                                </div>
                                <div class="col-6 col-md-12 col-lg-12">
                                    <span class="book-text book-qty">${iterator[0].quantity}</span>
                                    <span class="book-text">x</span>
                                    <span class="book-text book-price">${iterator[0].book_price}(ကျပ်)</span>
                                </div>
                                <div class="col-6 d-block d-md-none d-lg-none col-md-12 col-lg-12">
                                    <i class="bi bi-trash3 text-warning"></i>
                                </div>
                                <div class="col-12">
                                    <span class="book-text"><span>=</span> <span class="total-price"></span>${iterator[0].quantity * iterator[0].book_price} (ကျပ်)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1  d-none d-md-block d-lg-block">
                            <i class="bi bi-trash3 text-warning"></i>
                        </div>
                    </div>
                    <hr>
                `);
                }
               
            },
            error:function(err){
                console.log(err);
            }
        });
    })
});
