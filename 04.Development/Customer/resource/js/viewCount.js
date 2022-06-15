$(document).ready(function(){
    $(".viewcount").click(function(){
        var bookId = $(this).val();
        var count = 0;
        count++;
        let view = {
            book_id: bookId,
            view_count: count,
        }
        $.ajax({
            url: "../Controller/getCurrentViewController.php",
            type: "POST",
            data: { send: JSON.stringify(view) },
            success: function (res) {
                var data = $.parseJSON(res);
                var currentView = data[0].view_count;
                let newData = {
                    book_id: bookId,
                    view_count:count,
                    currentView:currentView
                }
                $.ajax({
                    url: "../Controller/viewCountController.php",
                    type: "POST",
                    data: {send: JSON.stringify(newData)},
                    success:function(res){
                        var data = $.parseJSON(res);
                        console.log(data);
                    },
                    error: function(err){
                        console.log(err);
                    }
                })

            },
            error: function (err) {
                console.log(err)
            }
            
        });
    })
})