<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../resource/css/showData.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Book Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Publisher</th>
                <th>Edit </th>
                <th>Delete </th>
            </tr>
            <?php
            $count = 1;
            foreach ($result as $key => $value) {
                echo "<tr>";
                echo "<td>" . $value['category_name'] . "</td>";
                echo "</tr>";
                $count++;
            }
            ?>
    </div>
    </table>
</body>

</html>