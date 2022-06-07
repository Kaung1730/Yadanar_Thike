<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privicy & Policy</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <link rel="stylesheet" href="../resource/css/privacyPolicyList.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/privacyPolicyList.js"></script>
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
                    <div class="contact-box mt-4">
                        <div class="btn mt-4">
                            <button type="button" class="btn btn-secondary mx-3 btn-1 btn-size"><a href="privacyPolicyList.php" class="a-edit">Privacy & Policy</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-2 btn-size"><a href="guideList.php" class="a-edit">Guide</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="deliverycontrolList.php" class="a-edit">Delivery Control</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="serviceList.php" class="a-edit">Service</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="faqList.php" class="a-edit">FAQ</a></button>
                        </div>
                        <table class="table table-striped white_table tb-edit mt-3">
                            <?php require "../Controller/privacyListController.php" ?>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Question</th>
                                <th class="text-center">Answer</th>
                                <th class="text-center last" colspan="2">Action</th>
                            </tr>
                            <?php
                            $count = 1;
                            foreach ($result as $key => $value) {
                                echo "<tr>";
                                echo "<td class='text-center'>" . $count . ".</td>";
                                echo "<td class='text-center'>" . $value['question'] . "</td>";
                                echo "<td class='text-center'>" . $value['answer'] . "</td>";
                                echo "<td class='text-center last'><a href='../View/privacyPolicyEdit.php?id=" . $value['pp_id'] . "'><button type='button' class='btn btn-outline-info'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td class='text-center last'><a href='../Controller/privacyDeleteController.php?id=" . $value['pp_id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                                echo "</tr>";
                                $count++;
                            }
                            ?>
                        </table>
                        <nav aria-label="Page navigation example">
                            <a href="privacyPolicyAdd.php" class="a-edit"><button type="button" class="btn btn-secondary btn-3 mx-5 float-start">Add</button></a>
                            <ul class="pagination float-end me-5">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&#10094;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&#10095;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p>&nbsp;</p>
                        <!-- <p>&nbsp;</p> -->
                    </div>
                    <div class="copyright mt-2 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>