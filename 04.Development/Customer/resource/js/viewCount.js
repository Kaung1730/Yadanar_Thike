$(document).ready(function(){
    $(".viewcount").click(function(){
        console.log($(".view").val());
        var bookId = $(".view").val();
        var count = 0;
        count++;
        let view = {
            book_id: bookId,
            view_count: count,
        }
        $.ajax({
            url: "../Controller/viewCountController.php",
            type: "POST",
            data: { send: JSON.stringify(view) },
            success: function (res) {
                var data = $.parseJSON(res);
                console.log(data);
            },
            error: function (err) {
                console.log(err)
            }
            
        });
    })
})