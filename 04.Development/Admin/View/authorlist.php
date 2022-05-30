<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/authorlist.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/authorList.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="d-flex title_bar text-align-center">

                    </div>
                    <div class="author_bar">
                        <div class="d-flex justify-content-between">
                            <p class="pt-4 author_list">Author List</p>
                            <button class="add_author mt-4 me-4"><a href="./authorAdd.php" class="a-edit">Add New Author</a></button>
                        </div>
                        <hr />
                        <br>
                        <div class="d-flex justify-content-end">
                            <label for="" class="pe-2">Search</label>
                            <input type="Search" class="search_auther me-3">
                        </div>
                        <br />
                        <table class="table table-borderless-responsive-lg white_table tb-edit mx-5 mt-3">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Author Name</th>
                                <th>Author Description</th>
                                <th>Author Life</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>

        </form>
    </div>
</body>

</html>