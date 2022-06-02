<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Add</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/authorAdd.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/authorAdd.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="title_bar">

                    </div>
                    <div class="add_author">
                        <form action="../Controller/authorAddController.php" method="POST">
                            <div class="title_addauthor fs-5">Add Author</div>
                            <hr />
                            <div class="input-part ms-5">
                                <label class="author_name fs-5" for="">Author Name:</label>
                                <input type="text" class="box1 input-edit" name="author_name">
                                <label class="author_name fs-5 mt-2" for="">Author Category:</label>
                                <input type="text" class="box1 input-edit" name="author_category">
                                <label class="author_image fs-5" for="">Author Image:</label>
                                <div class="input-group mt-2 mb-3 ms-4 input-width">
                                    <input type="file" class="form-control input-edit" id="slide_img" name="author_img">
                                    <label class="input-group-text input-btn" for="inputGroupFile02">Browse</label>
                                </div>
                                <label for="" class="author_des fs-5">Author Description:</label>
                                <input type="text" class="box1 input-edit" name="author_des">
                                <label for="" class="author_life fs-5">Author Life:</label>
                                <div class="d-flex">
                                    <div>
                                        <select name="born_years" id="born_years" name="born_years">
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                        </select>
                                    </div>
                                    <div class="arrow"></div>
                                    <div>
                                        <select name="die_years" id="die_years" name="die_years">
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-4">
                                <button type="submit" name="submit" class="submit mx-5 mt-4 mb-3">Submit</button>
                                <button type="reset" name="reset" class="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="copyright text-center mt-2">Copyright@2022YadanarThike All Rights Reserved.</div>
        </form>
    </div>
</body>

</html>