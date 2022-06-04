<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 5 star rating example using jQuery star rating plugin</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css"rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
</head>
<body>


<div class="container">


    <input id="input-1"
    name="input-1"
    class="rating rating-loading" 
    value="0"
    data-min="0"
    data-max="5"
    data-step="0.5"
    data-size="xs">

    
</div>


<script>
$("#input-id").rating();
</script>


</body>
</html>


