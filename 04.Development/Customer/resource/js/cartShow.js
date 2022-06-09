$(document).ready(function(){
    $(".cart").click(function(){
        $.ajax({
            url: "../Controller/cartItemShow.php",
            type: "POST",
            success: function (res){
                var data = $.parseJSON(res);
                alert("success");
            },
            error:function(err){
                console.log(err);
            }
        });
        
                                //to clear old data
                // $("#cartBody").empty();
                // for (let index = 0; index < final.length; index++) {
                //     $("#cartBody").append(`
                    // <div class="row g-0">
                    //     <div class="col-lg-3">
                    //         <img src="${final[index].book_img}" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" id="imgCart"/>
                    //     </div>
                    //     <div class="col-lg-8">
                    //         <div class="row text-white">
                    //             <div class="col-12">
                    //                 <input type="hidden" name="book_id">
                    //                 <p class="book-title">${final[index].book_name}</p>
                    //             </div>
                    //             <div class="col-6 col-md-12 col-lg-12">
                    //                 <span class="book-text book-qty">${final[index].quantity}</span>
                    //                 <span class="book-text">x</span>
                    //                 <span class="book-text book-price">${final[index].book_price}(ကျပ်)</span>
                    //             </div>
                    //             <button class="col-6 d-block d-md-none d-lg-none col-md-12 col-lg-12 delete-btn" value=${final[index].book_id}>
                    //                 <i class="bi bi-trash3 bg-trasnparent text-warning" value=${final[index].book_id}></i>
                    //             </button>
                    //             <div class="col-12">
                    //                 <span class="book-text"><span>=</span> <span class="total-price"></span>${final[index].quantity * final[index].book_price} (ကျပ်)</span>
                    //             </div>
                    //         </div>
                    //     </div>
                    //     <button class="col-lg-1  d-none d-md-block d-lg-block delete-btn" value=${final[index].book_id}>
                    //     <i class="bi bi-trash3  bg-trasnparent text-warning" value=${final[index].book_id}></i>
                    //     </button>
                    // </div>
                    // <hr>
                // `);
                //}

        //         $(".delete-btn").click(function(){
        //         var item_id = $(this).val();
        //         alert(item_id);
        //         let postdata = {
        //             "item_id":item_id,
        //         }
        //         $.ajax({
        //             url: "../Controller/deleteCartItem.php",
        //             type: "POST",
        //             data:{senddata: JSON.stringify(postdata)},
        //             success: function (res){
        //                 data = $.parseJSON(res);
        //             }
        //         });
            
        //     })
            
         });

});
