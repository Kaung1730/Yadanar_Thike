<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Add</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/bookAdd.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/bookAdd.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="../Controller/bookAddController.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="title_bar">

                    </div>
                    <div class="add_author">
                        <div class="title_addauthor fs-5">Add Books</div>
                        <hr />
                        <label class="book_name fs-5" for="">Book Name:</label>
                        <input type="text" class="box1 input-edit" name="book_name">
                        <label class="categories fs-5" for="">Categories:</label>
                        <!-- <input type="text" class="box1 input-edit" name="book_cate"> -->
                        <select name="book_cate" id="" class="box1 input-edit">
                            <?php
                            foreach ($result as $key => $value) {
                                echo "<option value='" . $value['book_id'] . "'>" . $value['category_id'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="" class="author fs-5">Author:</label>
                        <!-- <input type="text" class="box1 input-edit" name="book_author"> -->
                        <select name="book_author" id="" class="box1 input-edit">
                            <?php
                            foreach ($result as $key => $value) {
                                echo "<option value='" . $value['author_id'] . "'>" . $value['author_name'] . "</option>";
                            }
                            ?>
                        </select>
                        <div class="input-part ms-4 mt-2 slide-me">
                            <label for="book_img" class="form-label fs-5 text-start">Book Image:</label>
                            <div class="input-group mt-2 mb-3 input-width">
                                <input type="file" class="form-control input-edit" id="book_img" name="book_img">
                                <label class="input-group-text input-btn" for="inputGroupFile02">Browse</label>
                            </div>
                        </div>
                        <label for="" class="book_price fs-5">Book Price:</label>
                        <input type="text" class="box1 input-edit" name="book_price">
                        <label for="" class="book_des fs-5">Book Description:</label>
                        <textarea type="text" class="box1 input-edit" name="book_desc"></textarea>
                        <label for="" class="page_no fs-5">Page No:</label>
                        <input type="text" class="box1 input-edit" name="book_pg">
                        <div>
                            <label for="" class="size fs-5">Size</label>
                            <div class="d-flex ">
                                <div>
                                    <label for="" class="length fs-5">Length:</label>
                                    <!-- <select id="box_lwh" name="length" class="input-edit">
                                            <option value=""></option>
                                        </select> -->
                                    <input type="text" class="box_lwh input-edit" name="length">
                                </div>
                                <div>
                                    <label for="" class="width fs-5">Width:</label>
                                    <!-- <select id="box_lwh" name="width" class="input-edit">
                                        </select> -->
                                    <input type="text" class="box_lwh input-edit" name="width">
                                </div>
                                <div>
                                    <label for="" class="height fs-5">Height:</label>
                                    <!-- <select id="box_lwh" name="height" class="input-edit">
                                        </select> -->
                                    <input type="text" class="box_lwh input-edit" name="height">
                                </div>
                            </div>
                        </div>
                        <label for="" class="publisher fs-5">Publisher:</label>
                        <!-- <input type="text" class="box1 input-edit" name="book_pub"> -->
                        <select name="book_pub" id="" class="box1 input-edit">
                            <?php
                            echo "<option value=''></option>";
                            ?>
                        </select>
                        <div>
                            <button type="submit" name="submit" class="submit">Submit</button>
                            <button type="reset" name="reset" class="reset">Reset</button>
                        </div>
                    </div>
                    <div class="copyright text-center mt-2">Copyright@2022YadanarThike All Rights Reserved.</div>
        </form>
    </div>
</body>

</html>